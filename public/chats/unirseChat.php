<script>

$(document).ready(function () {

(function ($) {

    $('.filtrar').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.buscar tr').hide();
        $('.buscar tr').filter(function () {
            return rex.test($(this).text());
        }).show();
    })

    $('tr').click(function() {
      $(this).attr('class','seleccionado');
    })

    $('#unase').click(function() {
      $('form').before(
            '<div class="col-md-12 alert alert-success alert-dismissable">' +
            '<button type="button" class="close" ' +
            'data-dismiss="alert" aria-hidden="true">' +
            '&times;' +
            '</button>' +
            'Te has unido al chat correctamente.' +
            '</div>');
    })

}(jQuery));

});

</script>
<div class="container">
    <div class="row">
        <div id="cabeceraChat" class="col-12">
            <h5>Unirse a un chat</h5>
        </div>
    </div>
    <form>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Búsqueda por título</label>
            <div id="buscar" class="input-group">
                <input id="filtrar" type="text" class="filtrar form-control" placeholder="Título del chat">
                <div class="input-group-append">
                    <span class="enviar input-group-text" id="basic-addon2">Buscar</span>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Búsqueda por tags</label>
            <div id="buscar" class="input-group">
                <input id="filtrar" type="text" class="filtrar form-control" placeholder="Tags del chat">
                <div class="input-group-append">
                    <span class="enviar input-group-text" id="basic-addon2">Buscar</span>
                </div>
            </div>
        </div>
    </div>
  </form>

<table class="table table-hover">
 <thead>
  <tr>
   <th>Titulo</th>
   <th>Descripción</th>
   <th>Tags</th>
  </tr>
 </thead>
 <tbody class="buscar">
   <tr>
       <td>Chat 5</td>
       <td>Lorem ipsum sit amet proliquam est mortit</td>
       <td>verano, fiesta, jovenes</td>
    </tr>
    <tr>
       <td>Chat 6</td>
       <td>Lorem ipsum sit amet proliquam est mortit</td>
       <td>politica, ayuntamiento</td>
    </tr>
    <tr>
       <td>Chat 7</td>
       <td>Lorem ipsum sit amet proliquam est mortit</td>
       <td>jovenes, estudios, colegios</td>
    </tr>
    <tr>
       <td>Chat 8</td>
       <td>Lorem ipsum sit amet proliquam est mortit</td>
       <td>general</td>
    </tr>
 </tbody>
</table>
    <input id="unase" type="button" class="btn btn-100" value="Únase">
</div>