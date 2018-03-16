/**
* 
* Generador del formulario de crear noticia
*
* @class crearNoticiaJS
* @constructor
*/

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
  $( "input[name='importante']" ).checkboxradio({
        icon: false
  });

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

/**
* 
* Crea un div con la ID y la clase pertinente para realizar la subida de archivos y lo devuelve
*
* @method creacionInputImagenZone
* @return {Object} Devuelve un div para hacer la subida de un archivo
*/
function creacionInputImagenZone(){  	
  var div = $('<div></div>');        
  div.attr("id", "drop-zone");
  div.attr("class", "upload-drop-zone");
  return div;
}

/**
* 
* Crea un input para introducir la fecha de la noticia usando JQuery UI y lo devuelve
*
* @method creacionInputFecha
* @return {Object} Devuelve un input tipo date
*/
function creacionInputFecha(){  	
  var inputFecha = $('<input type="date" name="fecha" class="form-control">');        
  $('#formularioNoticias').append(inputFecha); 
  inputFecha.datepicker({dateFormat: 'yy-mm-dd'});
  return inputFecha;
}

/**
* 
* Crea un input para introducir el título de la noticia y lo devuelve
*
* @method creacionInputTitulo
* @return {Object} Devuelve un input tipo text
*/
function creacionInputTitulo(){  	
  var input = $('<input type="text" class="form-control" name="titulo">'); 
  return input;
}

/**
* 
* Crea un input para introducir la categoría de la noticia usando JQuery UI y lo devuelve
*
* @method creacionInputCategoria
* @return {Object} Devuelve un input tipo text autocompletable
*/
function creacionInputCategoria(){  	
  var input = $('<input type="text" class="form-control" name="categoria">');
  
  var categorias = $.parseJSON($.ajax({
      type: "GET",
      url:  'categorias',
      dataType: "json", 
      async: false
  }).responseText);

  input.autocomplete({
        source: categorias
  });
  return input;
}

/**
* 
* Crea un input para comprobar si es importante la noticia usando JQuery UI y lo devuelve
*
* @method creacionCheckboxNoticiaImportante
* @return {Object} Devuelve un input tipo checkbox
*/
function creacionCheckboxNoticiaImportante(){  	
  var input = $('<div class="container"> <label class="col-md-12 checkbox-inline"><input type="checkbox" name="importante" value=""> ¿Marcar como importante?</label> </div>'); 
  return input;
}


/**
* 
* Crea un input para introducir la fecha actual y lo devuelve
*
* @method creacionInputFechaActualHidden
* @return {Object} Devuelve un input tipo date oculto
*/
function creacionInputFechaActualHidden() {
  var input = $('<input name="fechaActual" type="hidden"></input>'); 
  return input;
}

/**
* 
* Crea un div para crear una fila de Bootstrap
*
* @method creacionDivRow
*/
function creacionDivRow(){
  var elemento = $('<div></div>');
  elemento.attr("class","row");  
  elemento.attr("id","formularioNot");  
  $('#formularioNoticias').append(elemento);     	
}

/**
* 
* Crea un div con 6 columnas de Bootstrap y lo devuelve
*
* @method creacionDivCol
* @return {Object} Devuelve un div con 6 columnas de Bootstrap
*/
function creacionDivCol(){
  var elemento = $('<div></div>');
  elemento.attr("class","col-md-6");  
  return elemento;   	
}   

/**
* 
* Crea un div con la clase panel-body de Bootstrap y lo devuelve
*
* @method creacionDivPanelBody
* @return {Object} Devuelve un div con la clase panel-body de Bootstrap
*/
function creacionDivPanelBody(){
  var elemento = $('<div></div>');
  elemento.attr("class","panel-body");  
  return elemento;   	
} 

/**
* 
* Crea un div con el identificador adjuntarArchivo y lo devuelve
*
* @method creacionDivAdjuntar
* @return {Object} Devuelve un div con el identificador adjuntarArchivo
*/
function creacionDivAdjuntar(){
  var elemento = $('<div></div>');
  elemento.attr("id","adjuntarArchivo");  
  return elemento;   	
} 

/**
* 
* Crea un div con la clase form-group de Bootstrap y lo devuelve
*
* @method creacionDivClassFormGrup
* @return {Object} Devuelve un div con la clase form-group de Bootstrap
*/
function creacionDivClassFormGrup(){
  var elemento = $('<div></div>');
  elemento.attr("class","form-group");      	
  return elemento;
}

/**
* 
* Crea un div para adjuntar archivos de Bootstrap y lo devuelve
*
* @method creacionDivClassForm
* @return {Object} Devuelve un div para adjuntar archivos de Bootstrap
*/
function creacionDivClassForm(){
  var elemento = $('<div class="form-control custom-file">');   	
  return elemento;

}

/**
* 
* Crea un input tipo file y lo devuelve
*
* @method creacionInputFile
* @return {Object} Devuelve un input tipo file para obtener el archivo seleccionado por el usuario
*/
function creacionInputFile(){
  var elemento = $('<input name="imagen" type="file" class="custom-file-input">');    	
  return elemento;
}

/**
* 
* Crea un label para el input tipo file y lo devuelve
*
* @method creacionLabelFile
* @return {Object} Devuelve un label para el input tipo file
*/
function creacionLabelFile(){
  var elemento = creacionLabel("Selecciona el archivo");
  elemento.attr('id', "archivo");
  elemento.attr('class', "custom-file-label");    	
  return elemento;
}

/**
* 
* Crea un label con el texto pasado como parámetro
*
* @method creacionLabel
* @param {String} texto Texto del label
* @return {Object} Devuelve un label con el texto indicado
*/
function creacionLabel(texto){
  var elemento = $('<label></label>');
  elemento.text(texto); 
  return elemento;
}

/**
* 
* Crea un textArea y lo devuelve
*
* @method creacionTextArea
* @return {Object} Devuelve un input tipo textArea
*/
function creacionTextArea(){
  var elemento = $('<textarea class="descripcion form-control" rows="3" cols="3" name="descripcion"></textarea>');    	
  return elemento;
}

/**
* 
* Crea un input tipo button y lo devuelve
*
* @method creacionInputEnviar
* @return {Object} Devuelve un input tipo button
*/
function creacionInputEnviar(){
  var elemento = $('<div class="container"> <input class="btn btn-100" id="enviarFormulario" type="button" value="Enviar"> </div>');    	
  return elemento;
}

/**
* 
* Obtiene la fecha actual y la guarda en un input oculto
*
* @method obtenerFechaActual
*/
function obtenerFechaActual() {
  if($('input[name="importante"]').is(':checked')) {
      $('input[name="fechaActual"]').val("{{ date('Y-m-d H:i:s') }}");
  } else {
      $('input[name="fechaActual"]').val('');
  }
}