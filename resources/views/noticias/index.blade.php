@extends('layouts.master')
@section('content')

<div class="container">	
{{ Breadcrumbs::render('mostrarNoticias') }}
    <div id="denuncias" class="caja"> 
    	<h5>Listado de noticas</h5>
		<hr>       
         <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>id</th>
		        <th>Título</th>
		        <th>Descripción</th>		        
		        <th>Fecha</th>
		        <th>Imagen</th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach( $arrayNoticias as $key => $noticia)		  
		      <tr>
		        <td>{{$noticia->id_noticia}}</td>
		        <td>{{$noticia->titulo}}</td>
		        <td>{{$noticia->descripcion}}</td>
		        <td>{{$noticia->fecha}}</td>
		        <td> <img width="100px;" height="100px;" src="/storage/{{$noticia->imagen}}" class="img-fluid"></td>
		      </tr>
		     @endforeach	     
		    </tbody>
		  </table>
		</div>  
	</div>
</div>    
@stop