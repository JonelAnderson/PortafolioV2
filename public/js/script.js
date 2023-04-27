/* ============================== typing animation ============================ */
var typed = new Typed(".typing",{
    strings:["","Web Designer","Web Developer","Graphic Designer"],
    typeSpeed:100,
    BackSpeed:60,
    loop:true
})



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
$(".nav").find("a").click(function(){
  $(".nav li a").removeClass('active')
  $(this).addClass('active')
})
