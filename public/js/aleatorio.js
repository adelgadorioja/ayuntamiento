/**
*@fileoverview/@summary: Carga la lista de noticias
*@author: Diana Ruiz (lzi)
*creation: 13/03/18
*/

 /**
 * Carga las funciones para iniciar la página
 * @param 
 * @return {}
 */
window.onload = function () {
    cargarImagenPortada();
    cargarBanner();    
};

/**
 * Carga las imágenes aleatorias en el banner
 * @param 
 * @return {}
 */
function cargarBanner(){
    var images = [
        "/imagenes/cocacola.jpg",
        "/imagenes/cerveza.jpg",
        "/imagenes/snick.jpg",  
    ]; 
    images.current = 0;
    var img = document.getElementById( 'imagenBanner' );
    setInterval(function () {
        img.src = images[ images.current++ ];
        if ( images.current === images.length ) images.current = 0;       
    }, 1000 );

}


/**
 * Carga las imágenes aleatorias en el index
 * @param 
 * @return {}
 */
function cargarImagenPortada() {
    var images = [
        "/imagenes/people.jpg",
        "/imagenes/people2.jpg",
        "/imagenes/people3.jpg",  
    ]; 
    images.current = 0;
    var img = document.getElementById( 'imagenPorta' );    
    setInterval(function () {
        img.src = images[ images.current++ ];
        if ( images.current === images.length ) images.current = 0;       
    }, 1000 );


}
