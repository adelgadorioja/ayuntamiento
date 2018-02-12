@extends('layouts.master')

@section('content')

<script>
    $(document).ready(function () {
        $('#enviarFormulario').click(function() {
            $.ajax({
                type: "PUT",
                url: '{{asset('denuncias/responder')}}',
                data: $("#formularioResponderDenuncia").serialize(), // Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                    $('#formularioResponderDenuncia')[0].reset();
                    $('#formularioResponderDenuncia').before(
                        '<div class="col-md-12 alert alert-success alert-dismissable">' +
                        '<button type="button" class="close" ' +
                        'data-dismiss="alert" aria-hidden="true">' +
                        '&times;' +
                        '</button>' +
                            'Has respondido a la denuncia correctamente.' +
                        '</div>');
                }
                });
        });
    });
</script>

<div class="container">	
    <div id="denuncia" class="caja"> 
    	<h5>Información de la denuncia</h5>
        
        <p><span>Título:</span> {{$denuncia->titulo}} </p>
        <p><span>Descripción:</span> {{$denuncia->descripcion}} </p>
        <p><span>Imagen:</span> </p>
        <img src="/storage/{{$denuncia->imagen}}" class="img-fluid">
        <p><span>Localización:</span> {{$denuncia->localizacion}}</p>

        @if(Auth::user()->tipoUsuario == 0)
            <p><span>Respuesta:</span> {{$denuncia->respuesta}} </p>
        @else
            <p><span>Responder denuncia:</span></p>
            {{ Form::open(array('url' => 'denuncias/responder', 'id' => 'formularioResponderDenuncia', 'method' => 'PUT')) }}
            {{ csrf_field() }}
                <input type="hidden" name="idDenuncia" value="{{ $denuncia->id_denuncia }}">
                <textarea class="form-control" value="{{ $denuncia->respuesta }}" name="respuesta" id="respuesta" cols="30" rows="10"></textarea>
                <input class="btn btn-100" id="enviarFormulario" type="button" value="Enviar">
            {{ Form::close() }}
        @endif
	</div>
</div>

@stop