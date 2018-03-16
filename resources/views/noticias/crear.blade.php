@extends('layouts.master') @section('content')

<script src="{{asset('js/crearNoticiaJS.js')}}"></script>

<div class="container">

{{ Breadcrumbs::render('noticias') }}

    <div id="noticias" class="caja">
        <h5>Crear una noticia</h5>

         {{ Form::open(array('url' => 'noticias/crear', 'id' => 'formularioNoticias', 'enctype' => 'multipart/form-data')) }}
            {{ csrf_field() }}          

            <input type="hidden" name="id_user" value="{{Auth::id()}}">

          {{ Form::close() }}       
    </div>
</div>
@stop

