const iconbar = document.querySelector(".iconbar");
const navMenu = document.querySelector(".nav-menu");
// const modal =  window.getComputedStyle(document.querySelector('.nav-menu'), ':before');

// console.log(iconbar + navMenu);

// agregamos el evento al iconbar
iconbar.addEventListener("click", mobileMenu);

// agrega clase active a iconbar y nav-menu atraves de la funcion mobilmenu
function mobileMenu() {

  // toggle agregar ó elimina un nombre de clase de un elemento con JavaScript.
  iconbar.classList.toggle("active");
  navMenu.classList.toggle("active");
  // modal.classList.toggle("a  ctive");

  // console.log(iconbar.classList + navMenu.classList);
}

/*----------------------------------
       Iniciamos SLIDER
--------------------------------*/
$(function () {
  $('.slider').bxSlider({
      mode: 'fade',
      auto: true,

      slideWidth: 2000,
      slideMargin: 0,
      nextText: '<i class="fa fa-chevron-right"></i>',
      prevText: '<i class="fa fa-chevron-left"></i>'

  });
});

/*----------------------------------
       Iniciamos smoothScroll (Scroll Suave)
--------------------------------*/
smoothScroll.init({
  speed: 2000, // Integer. How fast to complete the scroll in milliseconds
  offset: 50, // Integer. How far to offset the scrolling anchor location in pixels

});

/*---------------------------------
OCULTAR Y MOSTRAR BOTON IR ARRIBA
----------------------------------*/
$(function () {
  $(window).scroll(function () {
    var scrolltop = $(this).scrollTop();
    if (scrolltop >= 50) {
      $(".ir-arriba").fadeIn();
    } else {
      $(".ir-arriba").fadeOut();
    }
  });

});

/*---------------------------------
CABECERA ANIMADA
----------------------------------*/
$(window).scroll(function () {

  var nav = $('.iconbar');
  var scroll = $(window).scrollTop();

  if (scroll >= 50) {
    nav.addClass("remover-iconbar");
  } else {
    nav.removeClass("remover-iconbar");
  }
});

/*---------------------------------
CARRUSEL DE IMAGENES
----------------------------------*/

$('.owl-carousel').owlCarousel({
  loop: true,
  nav:true,
  margin: true,
  autoWidth: false,
  responsiveClass: true,
  // navText:['anterior', 'siguiente'],
  navText:['<i class="fa fa-arrow-alt-circle-left"></i>','<i class="fa fa-arrow-alt-circle-right"></i>'],
  responsive: {
      0: {
          items: 1,
          margin:1
      },
      500: {
          items: 2,
          margin:5
      },
      800: {
          items: 4,
          margin:10
      },
      1000: {
          items: 4,
          margin:10,
          nav:true
      }
      
  }
})

/*---------------------------------
FLUIDBOX DE IMAGENES
----------------------------------*/
/* 
 $(function () {
  $('.galeria a[rel=mifluid]').fluidbox({
      viewportFill: 0.8,
      maxWidth: 850,
      loader: true
  });
  
}) 
 */

lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true,
  'positionFromTop': 80
}) 