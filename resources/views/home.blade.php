@extends('layouts.master')

@section('content')
<script>
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
</script>
 <div class="container">
            <div id="inicioSuperior" class="row">
                <div class="col-md-8">
                    <div id="imagenPortada" class="caja apartadoInicio">

                    </div>
                </div>
                <div class="col-md-4">
                    <div id="noticias" class="caja apartadoInicio">
                        <h5 class="tituloApartado">Últimas noticias</h5>
                        <h6>Título noticia 1</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit amtet Lorem ipsum sit amtet lorem ipsum...</p>
                        <h6>Título noticia 2</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit...</p>
                        <h6>Título noticia 3</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit amtet Lorem ipsum sit ...</p>
                        <h6>Título noticia 4</h6>
                        <p>Lorem ipsum sit amtet lorem ipsum sit amtet Lorem ipsum sit ...</p>
                    </div>
                </div>
            </div>

            <div id="banner" >
                <p>Banner 180px</p>
            </div>

            <div id="inicioInferior" class="row">
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Debates</h5>
                        <div id="imagenDebates" class="imagenApartado"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Denuncias</h5>
                        <div id="imagenDenuncias" class="imagenApartado"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apartadoInicio caja">
                        <h5 class="tituloApartado">Intercambios</h5>
                        <div id="imagenIntercambios" class="imagenApartado"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim vel purus suscipit,
                            vitae convallis ex placerat. Quisque commodo mollis consequat.</p>
                    </div>
                </div>
            </div>
        </div>

@stop
