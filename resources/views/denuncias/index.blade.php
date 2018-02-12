@extends('layouts.master')

@section('content')
<div class="container">	
    <div id="denuncias" class="caja"> 
    	<h2 style="text-align:center">Listado de denuncias</h2>
		<hr>       
         <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th><h4>id</h4></th>
		        <th><h4>Título</h4></th>
		        <th><h4>Descripción</h4></th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach( $arrayDenuncias as $key => $denuncia )		  
		      <tr>
		        <td> <a href="{{ url('denuncias/editar/'.$d->id_denuncia) }}">{{$denuncia->id_denuncia}}</a></td>
		        <td>{{$denuncia->titulo}}</td>
		        <td>{{$denuncia->descripcion}}</td>
		      </tr>
		     @endforeach	     
		    </tbody>
		  </table>
		</div>  
	</div>
</div>    
@stop