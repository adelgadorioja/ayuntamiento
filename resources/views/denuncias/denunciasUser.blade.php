@extends('layouts.master')

@section('content')
<div class="container">	
    <div id="denuncias" class="caja"> 
    	<h5>Listado de denuncias realizadas</h5>
		<hr>       
         <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>id</th>
		        <th>Título</th>
		        <th>Descripción</th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach( $arrayDenuncias as $key => $denuncia )		  
		      <tr>
		        <td> <a href="{{ url('denuncias/editar/'.$denuncia->id_denuncia) }}">{{$denuncia->id_denuncia}}</a></td>
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