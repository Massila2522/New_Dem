let menu = document.querySelector('.header #bars');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
 menu.classList.toggle('fa-times');  
 navbar.classList.toggle('activate');
};

window.onscroll = () =>{
 menu.classList.remove('fa-times');
 navbar.classList.remove('activate');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});