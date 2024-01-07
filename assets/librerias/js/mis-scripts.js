jQuery(document).ready(function($){

/*Botones para alternar entre categorías*/
var btnCachorros = $('#cachorros'), btnPerros = $('#perros'), btnGatos = $('#gatos');
var contenedorCachorros = $('#contenedor_cachorros'), contenedorPerros = $('#contenedor_perros'), contenedorGatos = $('#contenedor_gatos');

btnCachorros.click(function(){
    contenedorPerros.hide();
    contenedorGatos.hide();
    contenedorCachorros.fadeIn(500);
});
btnPerros.click(function(){
    contenedorCachorros.hide();
    contenedorGatos.hide();
    contenedorPerros.fadeIn(500);
});
btnGatos.click(function(){
    contenedorCachorros.hide();
    contenedorPerros.hide();
    contenedorGatos.fadeIn(500);
});
/*Botones para alternar entre categorías*/

/*Boton para desplegar formulario de adopción*/
var btnFichaForm = $('#boton_adoptame_ficha');
var contenedorForm = $('#contenedor_formulario');

btnFichaForm.click(function(){
  contenedorForm.fadeIn(500);
})
/*Boton para desplegar formulario de adopción*/

$('#carrusel_exitos').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });    

// $('#carrusel_inicio').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 3000,
//     responsive: [
//       {
//         breakpoint: 1024,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 3,
//           infinite: true,
//           dots: true
//         }
//       },
//       {
//         breakpoint: 600,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 2
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1
//         }
//       }
//     ]
//   });    

});