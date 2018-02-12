@extends('layouts.master')

@section('content')

<div class="container">	
    <div id="denuncia" class="caja"> 
    	<h5>Información de la denuncia</h5>
        
        <p><span>Título:</span> {{$denuncia->titulo}} </p>
        <p><span>Descripción:</span> {{$denuncia->descripcion}} </p>
        <p><span>Imagen:</span> </p>
        <img src="localhost:8000/storage/{{$denuncia->imagen}}" class="img-fluid">
        <p><span>Localización:</span> {{$denuncia->localizacion}}</p>
	</div>
</div>

@stop