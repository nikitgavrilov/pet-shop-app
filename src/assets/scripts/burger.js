const headerLogo = document.querySelector(".header__logo");
const headerMenu = document.querySelector(".header__nav");
const burgerBtn = document.querySelector(".header__burger");
const body = document.body;

burgerBtn.addEventListener("click", () => {
  headerLogo.classList.toggle("active");
  headerMenu.classList.toggle("active");
  burgerBtn.classList.toggle("active");
  body.classList.toggle("lock");
});
