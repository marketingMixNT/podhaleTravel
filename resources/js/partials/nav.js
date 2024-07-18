const hamburgerBtn = document.querySelector("#hamburger");
const menu = document.querySelector("#menu");

const menuHandler = () => {
    hamburgerBtn.classList.toggle('is-active')
   menu.classList.toggle('translate-x-[100%]')
   
};

hamburgerBtn.addEventListener("click", menuHandler);