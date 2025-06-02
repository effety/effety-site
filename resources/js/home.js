// Helper Function to Animate the Numbers
const animateCounter = (id, target) => {
    const element = document.getElementById(id);
    let count = 0;
    const speed = Math.ceil(target / 100); // Speed depends on target value

    const updateCount = () => {
        if (count < target) {
            count += speed;
            element.textContent = `${Math.min(count, target)}+`;
            requestAnimationFrame(updateCount);
        }
    };

    updateCount();
};

// Observer to Trigger Animation When in View
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            animateCounter('stat-1', 32); // 32k+
            animateCounter('stat-2', 250);   // 250+
            animateCounter('stat-3', 87);    // 87+
            observer.disconnect(); // Stop observing after triggering
        }
    });
});

// Target the Stats Section
const statsSection = document.querySelector('#stat-1'); // Any stat ID works
observer.observe(statsSection);



const cryptoData = []; 

const coinList = [
  "BTC", "ETH", "BNB", "ADA", "DOGE", "SOL", "XRP", "DOT", "LTC", "SHIB", "UNI", "LINK",
  "MATIC", "AVAX", "ALGO", "TRX", "ATOM", "FIL", "EGLD", "THETA", "XMR", "NEO", "VET", "KSM",
  "FTM", "AXS", "ENJ", "SAND", "GRT", "ZIL", "HNT", "CHZ", "COMP", "YFI", "SNX", "CRV", "RUNE",
  "BAT", "FTT", "CAKE", "LUNA", "ONE", "QTUM", "RVN", "XDC", "OMG", "IOST", "ZRX", "GALA", "CELO",
  "BTT", "WAVES", "LRC", "KAVA", "ANKR", "DGB", "HOT", "STX", "SC", "IOTX", "NEAR", "DYDX", "TWT",
  "MTL", "AR", "RSR", "OCEAN", "MINA", "RLC", "ELON", "DENT", "COTI", "HNT", "PERP", "KEEP", "CVC",
  "XEC", "ERN", "SKL", "INJ", "FLOW", "REN", "MIR", "BAND", "DEGO", "ALPHA", "WRX", "REQ", "QNT",
  "HIVE", "CTSI", "SLP", "SXP", "BEL", "AGIX", "POLY", "PHA", "TRB"
];

async function fetchCryptoData() {
  try {
    const response = await fetch("https://api.binance.com/api/v3/ticker/24hr"); 
    const data = await response.json();
    const filteredData = data.filter(item => 
      coinList.includes(item.symbol.replace("USDT", ""))
    );

    filteredData.forEach((item) => {
      cryptoData.push({
        name: item.symbol.replace("USDT", ""),
        price: `$${new Intl.NumberFormat().format(parseFloat(item.lastPrice).toFixed(2))} USD`, // Price with separator
        change: `${parseFloat(item.priceChangePercent).toFixed(2)}%`,
      });
    });

    console.log(cryptoData); 
  } catch (error) {
    console.error("Error fetching crypto data:", error);
  }
}

document.addEventListener("DOMContentLoaded", function () {
    fetchCryptoData();
});

// Get the ticker container
const tickerContainer = document.getElementById("crypto-ticker-content");
const tickerContainerClone = document.getElementById("crypto-ticker-content-clone");

// Dynamically populate the ticker
setTimeout(() => {
    cryptoData.forEach((crypto) => {
      const cryptoElement = document.createElement("div");
      cryptoElement.className = "flex items-center space-x-2 text-xl font-medium text-black";
      cryptoElement.innerHTML = `
        <span class="font-bold ml-10">${crypto.name}</span>
        <span>${crypto.price}</span>
        <span class="flex items-center ${crypto.change.startsWith("-") ? "text-red-500" : "text-green-500"}">
          ${crypto.change.startsWith("-") ? '<svg class="w-4 h-4 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 10.95H5.82L12 17.27z"/></svg>' : '<svg class="w-4 h-4 mr-1 rotate-180" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 10.95H5.82L12 17.27z"/></svg>'}
          ${crypto.change}
        </span>
      `;
      tickerContainer.appendChild(cryptoElement);
      tickerContainerClone.appendChild(cryptoElement.cloneNode(true));  // Clone the element and append to the clone container
    });
    console.log('test')
}, 500);

