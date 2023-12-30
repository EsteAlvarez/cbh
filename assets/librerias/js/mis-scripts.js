jQuery(document).ready(function($){

/*Botones para alternar entre categorías*/
var btnCachorros = $('#cachorros'), btnPerros = $('#perros'), btnGatos = $('#gatos');
var contenedorCachorros = $('#contenedor_cachorros'), contenedorPerros = $('#contenedor_perros'), contenedorGatos = $('#contenedor_gatos');

btnCachorros.click(function(){
    contenedorPerros.hide();
    contenedorGatos.hide();
    contenedorCachorros.fadeIn();
});
btnPerros.click(function(){
    contenedorCachorros.hide();
    contenedorGatos.hide();
    contenedorPerros.fadeIn();
});
btnGatos.click(function(){
    contenedorCachorros.hide();
    contenedorPerros.hide();
    contenedorGatos.fadeIn();
});
/*Botones para alternar entre categorías*/



});