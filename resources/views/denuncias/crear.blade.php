@extends('layouts.master') @section('content')


<script>
    $(document).ready(function () {
        $('#enviarFormulario').click(function() {
            $('#formularioDenuncia').submit();
        });
        $('input[value=Enviar]').click(function () {
            $('#formularioDenuncia')[0].reset();
            $('#formularioDenuncia').before(
                '<div class="col-md-12 alert alert-success alert-dismissable">' +
                '<button type="button" class="close" ' +
                'data-dismiss="alert" aria-hidden="true">' +
                '&times;' +
                '</button>' +
                'La denuncia se ha tramitado correctamente. Gracias.' +
                '</div>');
        });

        $('input[type=file]').change(function () {
            var archivo = $('input[type=file]').val().split('\\').pop();
            $('#archivo').text(archivo);
        })
    });
</script>

<div class="container">

{{ Breadcrumbs::render('denuncias') }}

    <div id="denuncias" class="caja">
        <h5>Realizar una denuncia</h5>
       
        {{ Form::open(array('url' => 'denuncias/crear', 'id' => 'formularioDenuncia')) }}
            {{ csrf_field() }}
            <input type="hidden" name="id_user" value="{{Auth::id()}}">
            <input type="hidden" name="atendidoPor" value="0">
            <input type="hidden" name="fecha" value="{{date('Y-m-d H:i:s')}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="descripcion form-control" rows="5" name="descripcion"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel-body">
                        <div id="adjuntarArchivo">
                            <label>Adjuntar archivo</label>
                            <div class="form-group">
                                <div class="form-control custom-file">
                                    <input name="imagen" type="file" class="custom-file-input">
                                    <label id="archivo" class="custom-file-label">Selecciona el archivo</label>
                                </div>
                            </div>
                        </div>
                        <label>O arrástrelo</label>
                        <div class="upload-drop-zone" id="drop-zone">
                            Arrastre su archivo aquí
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Localización</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="localizacion">
            </div>
            <input class="btn btn-100" id="enviarFormulario" type="button" value="Enviar">
        {{ Form::close() }}
    </div>
    @stop