@extends('layouts.master')
<script src="{{ asset('js/aleatorio.js') }}"></script>
@section('content')


<div class="container">	
{{ Breadcrumbs::render('mostrarNoticias') }}
    <div id="denuncias" class="caja"> 
    	<h5>Listado de noticias</h5>
		<hr> 		
         <table id="arrayNoticias" class="table table-bordered">
		    <thead>
		      <tr>
		        <th>id</th>
		        <th>Título</th>
		        <th>Descripción</th>		        
		        <th>Fecha</th>
		        <th>Categoria</th>
		        <th>Imagen</th>
		        <th>Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach( $arrayNoticias as $key => $noticia)		  
		      <tr id="{{$noticia->id_noticia}}">
		        <td>{{$noticia->id_noticia}}</td>
		        <td>{{$noticia->titulo}}</td>
		        <td>{{$noticia->descripcion}}</td>
		        <td>{{$noticia->fecha}}</td>
		         <td>{{$noticia->categoria}}</td>
		        <td> <img width="100px;" height="100px;" src="/storage/{{$noticia->imagen}}" class="img-fluid"></td>
		        <td><input id="idNoticia" type="button" name="{{$noticia->id_noticia}}" onclick="eliminarNoticia()">eliminar</input></td>
		      </tr>
		     @endforeach	     
		    </tbody>
		  </table>
		</div>  
	</div>
</div>    
@stop