document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".header");
    const html = document.querySelector("html");
    let theme = "light";

    window.addEventListener("scroll" , ()=>{
        if (window.scrollY > 300) {
            header.classList.add("header-scroll");
        }
        
        else {
            header.classList.remove("header-scroll");
        }
    });

    toggleTheme.addEventListener("click" , ()=>{
        if (theme === "light") {
            theme = "dark";
            document.querySelector("#toggleTheme svg").classList.remove("fa-moon");
            document.querySelector("#toggleTheme svg").classList.add("fa-sun");
        }
        else{
            document.querySelector("#toggleTheme svg").classList.add("fa-moon");
            document.querySelector("#toggleTheme svg").classList.remove("fa-sun");
            theme = "light";
        }
        html.setAttribute("data-bs-theme" , theme)
    })
    new PureCounter();
})