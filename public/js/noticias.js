/**
*@fileoverview/@summary: Carga la lista de noticias
*@author: Diana Ruiz (lzi)
*creation: 13/03/18
*/

 /**
 * carga las noticias por categoria en el selector
 * @param 
 * @return {}
 */
window.onload = function () {
	$(document).ready(function () {    	
		$('select').change(function(){
			mostrarNoticiasPorCategoria();
		});
	});
};

/**
 * Muestra las noticias por categoria
 * @param 
 * @return {}
 */
function mostrarNoticiasPorCategoria() {
	var idCategoria = $('select').val();			
    $.ajax({
        type: "GET",
        url: "categoria/"+idCategoria,
        success: function (noticias) {
        	$('tbody tr').remove();
            noticias.forEach(noticia => {
            	crearFilaNoticia(noticia);
            });
        }
    });
}

/**
 * Crea las filas de la tabla de noticias
 * @param tabla noticia
 * @return {}
 */	
function crearFilaNoticia(noticia){
	$('<tr>'+
		'<td>'+noticia.id_noticia+'</td>'+
        '<td>'+noticia.titulo+'</td>'+
        '<td>'+noticia.descripcion+'</td>'+
        '<td>'+noticia.fecha+'</td>'+
        '<td>'+noticia.categoria+'</td>'+
        '<td> <img width="100px;" height="100px;" src="/'+
        'storage/'+noticia.imagen+'" class="img-fluid"></td>'+
		'</tr>').appendTo($("tbody"));
	}

/**
 * Elimina noticia
 * @param 
 * @return {}
 */
function eliminarNoticia(){
	var noticia = document.getElementById("idNoticia");
	var id_noticia = noticia.getAttribute("name");
	$.ajax({
        type: "GET",
        url: "eliminar/"+id_noticia,
        success: function (noticias) {
        	eliminarFilaNoticia(id_noticia);	            
        }
    });
}


/**
 * Elimina la fila de noticia y aplica los efectos
 * @param id_noticia recibe el id de la noticia a eliminar
 * @return {}
 */
function eliminarFilaNoticia(id_noticia){
    var noticiaTr = $('#'+id_noticia);
    $("#arrayNoticias").hide( "drop", {direction: "down"}, 3000 );       
    $("#arrayNoticias").show( "drop", {direction: "down"}, 3000 );
    $('table#arrayNoticias tr#'+id_noticia).remove(); 
}