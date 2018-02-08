

$(document).ready(function () {
    $('#imagenPortada').outerHeight($('#noticias').outerHeight());
    var imagenPortada = $('#imagenPortada');
    var backgrounds = [
        "{{asset('imagenes/people.jpg')}}", 
        "{{asset('imagenes/people2.jpg')}}",
        "{{asset('imagenes/people3.jpg')}}"];
    var current = 0;

    function nextBackground() {
        imagenPortada.css(
            'background-image',
            backgrounds[current = ++current % backgrounds.length]);

        setTimeout(nextBackground, 5000);
    }
    setTimeout(nextBackground, 5000);
    imagenPortada.css('background-image', backgrounds[0]);
});
