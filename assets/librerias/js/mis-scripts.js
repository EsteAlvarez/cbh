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



});