@extends('layouts.master') @section('content')

<script>
    $(document).ready(function () {
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

    	label = creacionLabel("O arrástrelo aquí.");
		panelBody.append(label);
		div  = creacionInputImagenZone();
		panelBody.append(div);

		label = creacionLabel("Categoria")
		categoria = creacionInputCategoria();
		panelBody.append(label);
		panelBody.append(categoria);

		input = creacionCheckboxNoticiaImportante();
		$('#formularioNot').append(input);

		input = creacionInputFechaActualHidden();
		$('#formularioNot').append(input);


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
		
		$('input[name="importante"]').click(obtenerFechaActual);
    	
    });

    /*
	* Creación input para la imagen    
	*/
	function creacionInputImagenZone(){  	
	    var div = $('<div></div>');        
	    div.attr("id", "drop-zone");
	    div.attr("class", "upload-drop-zone");
	    return div;
	}
	/*
	* Creación input para la fecha   
	*/
	function creacionInputFecha(){  	
	    var inputFecha = $('<input type="date" name="fecha" class="form-control">');        
	    $('#formularioNoticias').append(inputFecha);  
	    return inputFecha;
	}

	/*
	* Creación input para el titulo   
	*/
	function creacionInputTitulo(){  	
	    var input = $('<input type="text" class="form-control" name="titulo">'); 
	    return input;
	}

	/*
	* Creación input para la categoria   
	*/
	function creacionInputCategoria(){  	
	    var input = $('<input type="text" class="form-control" name="categoria">'); 
	    return input;
	}

	/*
	* Creación checkbox noticia importante   
	*/
	function creacionCheckboxNoticiaImportante(){  	
	    var input = $('<label class="col-md-6 checkbox-inline"><input type="checkbox" name="importante" value=""> ¿Marcar como importante?</label>'); 
	    return input;
	}

	function creacionInputFechaActualHidden() {
		var input = $('<input name="fechaActual" type="hidden"></input>'); 
		return input;
	}

	/*
	* Creación div class="row"  
	*/
	function creacionDivRow(){
		var elemento = $('<div></div>');
		elemento.attr("class","row");  
		elemento.attr("id","formularioNot");  
		$('#formularioNoticias').append(elemento);     	
	}

	/*
	* Creación Div class="Col"   
	*/
	function creacionDivCol(){
		var elemento = $('<div></div>');
		elemento.attr("class","col-md-6");  
		return elemento;   	
	}   

	/*
	* Creación div, panel Body
	*/
	function creacionDivPanelBody(){
		var elemento = $('<div></div>');
		elemento.attr("class","panel-body");  
		return elemento;   	
	} 

	/*
	* Creación div para adjuntar archivo  
	*/
	function creacionDivAdjuntar(){
		var elemento = $('<div></div>');
		elemento.attr("id","adjuntarArchivo");  
		return elemento;   	
	} 

	/*
	* Creación div class="form-group"
	*/

	function creacionDivClassFormGrup(){
		var elemento = $('<div></div>');
		elemento.attr("class","form-group");      	
		return elemento;
	}

	function creacionDivClassForm(){
		var elemento = $('<div class="form-control custom-file">');   	
		return elemento;

	}

	/*
	* Creación input para la imagen type file   
	*/
	function creacionInputFile(){
		var elemento = $('<input name="imagen" type="file" class="custom-file-input">');    	
		return elemento;
	}

	/*
	* Creación label File
	*/
	 function creacionLabelFile(){
		var elemento = creacionLabel("Selecciona el archivo");
		elemento.attr('id', "archivo");
		elemento.attr('class', "custom-file-label");    	
		return elemento;
	}

	/*
	* Creación label para los inputs
	* parametro texto, cadena que llevara el label
	*/
	function creacionLabel(texto){
		var elemento = $('<label></label>');
		elemento.text(texto); 
		return elemento;
	}

	/*
	* Creación textArea para la descripcion
	*/
	function creacionTextArea(){
		var elemento = $('<textarea class="descripcion form-control" rows="3" cols="3" name="descripcion"></textarea>');    	
		return elemento;
	}

	/*
	* Creación input type submit
	*/
	function creacionInputEnviar(){
		var elemento = $('<input class="btn btn-100" id="enviarFormulario" type="button" value="Enviar">');    	
		return elemento;
	}

	/*
	* Modificar input de la fecha
	*/
	function obtenerFechaActual() {
		if($('input[name="importante"]').is(':checked')) {
			$('input[name="fechaActual"]').val("{{ date('Y-m-d H:i:s') }}");
		} else {
			$('input[name="fechaActual"]').val('');
		}
	}


</script>

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

