document.addEventListener("DOMContentLoaded", function() {

  const callerId = document.getElementById("startButton");
    const dataAtt = callerId.getAttribute("data-att"); 

    const sipUri = `sip:${dataAtt}@pbx.100f.ch`;  
    const sipPass = `${dataAtt}`; 
    console.log('sip url = '  + sipUri);
    console.log('password = '  + sipPass);
  // Set up the WebSocket connection to the PBX
  // remoteAudio=document.getElementById;
	const socket = new JsSIP.WebSocketInterface('wss://pbx.100f.ch:8089/ws'); // WebSocket URL for your PBX

  // Configuration for the JsSIP user agent
  const configuration = {
    sockets: [socket],
    uri: `sip:${dataAtt}@pbx.100f.ch`,  // The SIP URI (your SIP extension)
    password: `${dataAtt}`,  // Your SIP password
    trace_sip: true,  // Enable SIP tracing for debugging
  };

  // Initialize the JsSIP User Agent
  const userAgent = new JsSIP.UA(configuration);

  // DOM Elements
  const statusElement = document.getElementById('status');
  const startButton = document.getElementById('startButton');
  const callButton = document.getElementById('callButton');
  const hangupButton = document.getElementById('hangupButton');
  const keypadButtons = document.querySelectorAll('.dtmf');
  const	remoteAudio = document.getElementById('remoteAudio');
  let session = null;

  // Event when registration succeeds
  userAgent.on('registered', () => {
    statusElement.textContent = 'Status: Registered';
    hangupButton.disabled = false;
  });

  // Event when registration fails
  userAgent.on('registrationFailed', () => {
    statusElement.textContent = 'Status: Registration Failed';
  });

  // Event when a new RTC session (call) is initiated
  userAgent.on('newRTCSession', (e) => {
    session = e.session;

    session.on('accepted', () => {
      statusElement.textContent = 'Status: In Call';
      hangupButton.disabled = false;  // Enable hangup button when the call is active
    });

    session.on('ended', () => {
      statusElement.textContent = 'Status: Disconnected';
      hangupButton.disabled = true;  // Disable hangup button after the call ends
    });

    session.on('failed', () => {
      statusElement.textContent = 'Status: Call Failed';
    });
  });

  // Start SIP connection when "Start" button is clicked
  startButton.addEventListener('click', () => {
    userAgent.start();
    startButton.disabled = true;
    statusElement.textContent = 'Status: Connecting...';
    callButton.disabled = false;
  });

  // Make a call when "Call" button is clicked
  callButton.addEventListener('click', () => {
    const targetNumber = '5555';  // The extension to call
    const options = {
      mediaConstraints: { audio: true, video: false },  // Only audio call
      rtcConfiguration: { iceServers: [{ urls: 'stun:meet.visiocall.ch:3478' }] },  // STUN server for NAT traversal
    };

    // Initiate the call to the target number (extension 10000 in this case)
//    session = userAgent.call(`sip:${targetNumber}@pbx.100f.ch`, options);
	      session = userAgent.call('5555', options);

		  session.connection.addEventListener('addstream', function(e) {
			  remoteAudio.srcObject = (e.stream) ;
		  })


    session.on('accepted', () => {
      statusElement.textContent = `Status: Calling ${targetNumber}`;
    });

    session.on('ended', () => {
      statusElement.textContent = 'Status: Disconnected';
    });

    session.on('failed', () => {
      statusElement.textContent = 'Status: Call Failed';
    });
  });

  // Hang up the call when "Hang Up" button is clicked
  hangupButton.addEventListener('click', () => {
    if (session) {
      session.terminate();  // End the current session (call)
    }
  });

  // Send DTMF tones when keypad buttons are pressed
  keypadButtons.forEach(button => {
    button.addEventListener('click', function() {
      const tone = this.getAttribute('data-tone');
//      if (session && session.status === JsSIP.C.SESSION_STATUS_CONFIRMED) {
        // Only send DTMF if the session is active (accepted)
        session.sendDTMF(tone);
        console.log(`DTMF tone ${tone} sent`);
//      } else {
 //       console.warn('Cannot send DTMF: Session is not active');
//      }
    });
  });
});
