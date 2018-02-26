
@extends('layouts.master')
@section('content')

<script>

	$(document).ready(function () {    	
		$('select').change(function(){
			mostrarNoticiasPorCategoria();
		});
	});

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
</script>

<div class="container">	
{{ Breadcrumbs::render('mostrarNoticias') }}
    <div id="denuncias" class="caja"> 
    	<h5>Listado de noticias</h5>
		<hr> 
		<select>
		<option>Categoría</option>	 
		@foreach( $arrayCategorias as $key => $categoria)
			<option value="{{$categoria->categoria}}">{{$categoria->categoria}}</option>
		@endforeach
		</select>   
         <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>id</th>
		        <th>Título</th>
		        <th>Descripción</th>		        
		        <th>Fecha</th>
		        <th>Categoria</th>
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
		         <td>{{$noticia->categoria}}</td>
		        <td> <img width="100px;" height="100px;" src="/storage/{{$noticia->imagen}}" class="img-fluid"></td>
		      </tr>
		     @endforeach	     
		    </tbody>
		  </table>
		</div>  
	</div>
</div>    
@stop