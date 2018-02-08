@extends('layouts.master')

@section('content')
<div class="container">

    <div id="denuncias" class="caja">
        <h5>Realizar una denuncia</h5>
       
        <form method="POST" action="{{url('denuncias/crear')}}">
        {{ csrf_field() }}
           <input type="hidden" name="id_user" value="{{Auth::id()}}"> 
           <input type="hidden" name="atendidoPor" value="0"> 
           <input type="hidden" name="fecha" value="{{date('Y-m-d H:i:s')}}">        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo">
                </div>
                 
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="descripcion form-control" rows="5" name="descripcion"></textarea>
                </div>
            </div>

            <div class="form-group">
                    <label>Localización</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="localización">
            </div>

            <div class="col-md-6">
                <div class="panel-body">
                    <div id="adjuntarArchivo">
                        <label>Selecciona el archivo</label>                             
                            <input type="text" class="form-control" name="imagen">                     
                        </div>
                    </div>
                    <label>O arrástrelo</label>
                    <div class="upload-drop-zone" id="drop-zone">
                        Arrastre su archivo aquí
                    </div>
            </div>
            
            <div class="col-md-12 js-upload-finished">
                <label>Archivos adjuntos</label>
                <div class="list-group">
                    <a class="list-group-item">
                        <span class="badge alert-success pull-right">jpg</span> imagen1</a>
                    <a class="list-group-item">
                        <span class="badge alert-success pull-right">png</span> imagen2</a>
                </div>
                <input class="btn btn-100" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>    
@stop