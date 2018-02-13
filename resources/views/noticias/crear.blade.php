@extends('layouts.master') @section('content')

<script>
    $(document).ready(function () {
       

    });
</script>

<div class="container">

{{ Breadcrumbs::render('denuncias') }}

    <div id="noticias" class="caja">
        <h5>Crear una noticia</h5>

         {{ Form::open(array('url' => 'denuncias/crear', 'id' => 'formularioDenuncia', 'enctype' => 'multipart/form-data')) }}
            {{ csrf_field() }}




          {{ Form::close() }}       
    </div>
</div>
@stop