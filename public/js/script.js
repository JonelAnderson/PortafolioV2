/* ============================== typing animation ============================ */
var typed = new Typed(".typing",{
    strings:["","Web Designer","Web Developer","Graphic Designer"],
    typeSpeed:100,
    BackSpeed:60,
    loop:true
})

/*=============== SHOW MENU ===============*/

const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}
/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== ADD BLUR TO HEADER ===============*/
const blurHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    this.scrollY >= 50 ? header.classList.add('blur-header') 
                       : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader)

/* ============================== Scroll ============================ */

let about = $('#about').offset().top,
    service = $('#services').offset().top,
    portafolio = $('#portafolio').offset().top,
    contact = $('#contact').offset().top;

window.addEventListener('resize', function() {
    let about = $('#about').offset().top,
        service = $('#services').offset().top,
        portafolio = $('#portafolio').offset().top,
        contact = $('#contact').offset().top;
});

$('#enlace-inicio').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 600);
});
$('#enlace-about').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: about - 10
    }, 600);
});
$('#enlace-services').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: service - 10
    }, 600);
});
$('#enlace-portafolio').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: portafolio - 10
    }, 600);
});

$('#enlace-contact').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: contact - 10
    }, 600);
});

/*====================Menu Navegacion========================== */
$(".nav__list").find("a").click(function(){
  $(".nav__list li a").removeClass('active')
  $(this).addClass('active')
})


