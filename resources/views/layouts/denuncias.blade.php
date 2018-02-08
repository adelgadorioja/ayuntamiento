@extends('layouts.master')

@section('content')
<div class="container">
    <div id="denuncias" class="caja">
        <h5>Realizar una denuncia</h3>
        <form class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="descripcion form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-body">
                    <div id="adjuntarArchivo">
                        <label>Adjuntar archivo</label>
                        <div class="form-group">
                            <div class="form-control custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Selecciona el archivo</label>
                            </div>
                        </div>
                    </div>
                    <label>O arrástrelo</label>
                    <div class="upload-drop-zone" id="drop-zone">
                        Arrastre su archivo aquí
                    </div>
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
                <input class="btn btn-100" type="button" value="Enviar">
            </div>
        </form>
    </div>
</div>    
@stop