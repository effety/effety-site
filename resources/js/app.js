import './bootstrap';
import './navbar';
import './home';
import AOS from 'aos';
import SmoothScroll from 'smooth-scroll';

import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1500,  // Set duration for animation
        easing: 'ease-in-out',  // Choose easing function
        once: true,  // Animation happens only once
    });  // Initialize AOS
});

const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 800, // Adjust scrolling speed (in ms)
    speedAsDuration: true
});
