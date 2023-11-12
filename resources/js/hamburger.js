const hamburgerBtn = document.querySelector(".hamburger");
const navItems = document.querySelectorAll(".navbar li a");
const navbar = document.querySelector(".navbar");

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    navbar.classList.toggle("active");
    navItems.forEach((item) => item.classList.toggle("active"));
};

if (hamburgerBtn) {
    hamburgerBtn.addEventListener("click", hamburgerHandler);
}
