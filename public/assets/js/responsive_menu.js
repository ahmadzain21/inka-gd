var menuBtn = document.getElementById("menu-btn");
var sidebar = document.querySelector("aside");

menuBtn.addEventListener("click", () => {
    sidebar.classList.toggle("menu-active");
});