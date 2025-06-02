const menuButton = document.getElementById("menuButton");
const closeMenuButton = document.getElementById("closeMenuButton");
const mobileMenu = document.getElementById("mobileMenu");
const lightSwitch = document.querySelector("#light-switch");
const backdrop = document.getElementById("backdrop");

// Function to open the menu
const openMenu = () => {
    mobileMenu.classList.remove("hidden");
    backdrop.classList.remove("hidden");
    setTimeout(() => {
        mobileMenu.classList.remove("-translate-x-full");
    }, 10);
};

// Function to close the menu
const closeMenu = () => {
    mobileMenu.classList.add("-translate-x-full");
    backdrop.classList.add("hidden");
    setTimeout(() => {
        mobileMenu.classList.add("hidden");
    }, 500); // Match the duration of the animation
};

// Open the menu when the menu button is clicked
menuButton.addEventListener("click", openMenu);

// Close the menu when the close button is clicked
closeMenuButton.addEventListener("click", closeMenu);

// Close the menu when clicking on the backdrop
backdrop.addEventListener("click", closeMenu);

// Close the menu when pressing the Escape key
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        closeMenu();
    }
});

// Prevent scroll when the menu is open
const body = document.body;

menuButton.addEventListener("click", () => {
    body.style.overflow = "hidden"; // Disable scrolling
});

closeMenuButton.addEventListener("click", () => {
    body.style.overflow = ""; // Enable scrolling
});

backdrop.addEventListener("click", () => {
    body.style.overflow = ""; // Enable scrolling
});

document.addEventListener("DOMContentLoaded", (event) => {
    // Check if the theme is stored in localStorage and apply it on page load
    const savedTheme = localStorage.getItem("theme");

    // If no saved theme, default to dark mode
    if (!savedTheme) {
        document.documentElement.classList.add("dark");
        lightSwitch.checked = true; // Make sure the switch is checked if no theme is saved
    } else if (savedTheme === "dark") {
        document.documentElement.classList.add("dark");
        lightSwitch.checked = true;
    } else {
        document.documentElement.classList.remove("dark");
        lightSwitch.checked = false;
    }
})

// Save the user's theme preference
lightSwitch.addEventListener("change", () => {
    const html = document.documentElement;
    if (lightSwitch.checked) {
        html.classList.add("dark"); // Enable dark mode
        localStorage.setItem("theme", "dark"); // Save the user's preference
    } else {
        html.classList.remove("dark"); // Disable dark mode
        localStorage.setItem("theme", "light"); // Save the user's preference
    }
});

// content.addEventListener("wheel", (event) => {
//     event.preventDefault();
//     let deltaY = event.deltaY; // Get the amount of scroll
//     let speed = deltaY * 1; // Adjust this value to increase/decrease speed
//     content.scrollTop += speed; // Apply the adjusted scroll value
// });
