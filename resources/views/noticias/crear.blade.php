@extends('layouts.master') @section('content')

<script>
    $(document).ready(function () {    	
      	creacionInputsOcultos();
    	creacionDivRow();
    	divTitulo = creacionDivCol();
    	divTitulo.attr("id","titulo");  
    	$('#formularioNot').append(divTitulo); 
    	
    	divGroup = creacionDivClassFormGrup();
    	divGroup.attr('id', 'titul');
    	$('#titulo').append(divGroup);     	
    	label = creacionLabel("Titulo: ");
    	divGroup.append(label);
    	input = creacionInputTitulo();
    	$('#titul').append(input);
   	

    	divGroup = creacionDivClassFormGrup();
    	divGroup.attr('id', 'fecha');
    	$('#titulo').append(divGroup);
    	label = creacionLabel("Fecha:  ");
    	divGroup.append(label);
    	inputFecha = creacionInputFecha();
    	$('#fecha').append(inputFecha);

    	divGroup = creacionDivClassFormGrup();
    	divGroup.attr('id', 'desc');
    	$('#titulo').append(divGroup);    	
    	label = creacionLabel("Descripción:");
    	divGroup.append(label);
    	textarea = creacionTextArea();
    	$('#desc').append(textarea);
    	
    	divImagen = creacionDivCol();
    	divImagen.attr("id","imagen");  
    	$('#formularioNot').append(divImagen); 
    	panelBody = creacionDivPanelBody();
    	$('#imagen').append(panelBody);
    	adjuntar = creacionDivAdjuntar();
    	$('.panel-body').append(adjuntar);
    	label = creacionLabel("Adjuntar Archivo:");
    	adjuntar.append(label);


    	divGroup = creacionDivClassFormGrup();
    	divGroup.attr('id', 'image');
    	adjuntar.append(divGroup);

    	custom = creacionDivClassForm();
    	$('#image').append(custom);

    	inputFile = creacionInputFile();
    	custom.append(inputFile);

    	labelFile = creacionLabelFile();
    	custom.append(labelFile);





    	inputEnviar = creacionInputEnviar();
    	$('#formularioNot').append(inputEnviar); 

    	 $('input[type=file]').change(function () {
            var archivo = $('input[type=file]').val().split('\\').pop();
            $('#archivo').text(archivo);
     	})

    	$('#enviarFormulario').click(function() {
            $('#formularioNoticias').submit();
        });
        
        $('input[value=Enviar]').click(function () {
            $('#formularioNoticias')[0].reset();
            $('#formularioNoticias').before(
                '<div class="col-md-12 alert alert-success alert-dismissable">' +
                '<button type="button" class="close" ' +
                'data-dismiss="alert" aria-hidden="true">' +
                '&times;' +
                '</button>' +
                'La Noticia se ha guardado correctamente. Gracias.' +
                '</div>');
        });
    	
    });

    function aparecer(){
        $('#noticias').fadeIn(1500);
      }    

    function creacionInputsOcultos(){
    										//input para obtener el id del usuario 
    	var elemento = $('<input type="show" name="id_user"  value="{{Auth::id()}}>');					
        $('#formularioNoticias').append(elemento); 
    }

     function creacionInputFecha(){ //input pata la fecha    	
        var inputFecha = $('<input type="date" name="fecha" class="form-control">');        
        $('#formularioNoticias').append(inputFecha);  
        return inputFecha;
    }

     function creacionInputTitulo(){ //input pata la fecha    	
        var input = $('<input type="text" class="form-control" name="titulo">'); 
        return input;
    }

    function creacionDivRow(){
    	var elemento = $('<div></div>');
    	elemento.attr("class","row");  
    	elemento.attr("id","formularioNot");  
    	$('#formularioNoticias').append(elemento);     	
    }

    function creacionDivCol(){
    	var elemento = $('<div></div>');
    	elemento.attr("class","col-md-6");  
    	return elemento;   	
    }   

    function creacionDivPanelBody(){
    	var elemento = $('<div></div>');
    	elemento.attr("class","panel-body");  
    	return elemento;   	
    } 

    function creacionDivAdjuntar(){
    	var elemento = $('<div></div>');
    	elemento.attr("id","adjuntarArchivo");  
    	return elemento;   	
    } 

    function creacionDivClassFormGrup(){
    	var elemento = $('<div></div>');
    	elemento.attr("class","form-group");      	
    	return elemento;
    }

    function creacionDivClassForm(){
    	var elemento = $('<div class="form-control custom-file">');   	
    	return elemento;

    }

     function creacionInputFile(){
    	var elemento = $('<input name="imagen" type="file" class="custom-file-input">');    	
    	return elemento;
    }

     function creacionLabelFile(){
    	var elemento = creacionLabel("Selecciona el archivo");
    	elemento.attr('id', "archivo");
    	elemento.attr('class', "custom-file-label");    	
    	return elemento;
    }

    function creacionLabel(texto){
    	var elemento = $('<label></label>');
    	elemento.text(texto); 
    	return elemento;
    }

    function creacionTextArea(){
    	var elemento = $('<textarea class="descripcion form-control" rows="5" name="descripcion"></textarea>');    	
    	return elemento;
    }
     
    function creacionInputEnviar(){
    	var elemento = $('<input class="btn btn-100" id="enviarFormulario" type="button" value="Enviar">');    	
    	return elemento;
    }


</script>

<div class="container">

{{ Breadcrumbs::render('denuncias') }}

    <div id="noticias" class="caja">
        <h5>Crear una noticia</h5>

         {{ Form::open(array('url' => 'noticias/crear', 'id' => 'formularioNoticias', 'enctype' => 'multipart/form-data')) }}
            {{ csrf_field() }}




          {{ Form::close() }}       
    </div>
</div>
@stop

