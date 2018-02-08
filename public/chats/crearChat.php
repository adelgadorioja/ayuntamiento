<script>
    $(function () {
        $('#tagsInput').keyup(anadirTag);
        $('#emailsInput').keyup(anadirEmail);
        $('input[value=Crear]').click(crearChat);
    });

    function anadirTag() {
        var string = $('#tagsInput').val();
        var ultimoCar = string.substr(string.length - 1);
        var tagsSeparados = string.split(',');
        $('#tags').empty();
        for (i = 0; i < tagsSeparados.length; i++) {
            tag = tagsSeparados[i];
            if (tag != "") {
                $('#tags').append('<p class="tag">' + tag + '</p>');
            }
        }
    }

    function anadirEmail() {
        var string = $('#emailsInput').val();
        var ultimoCar = string.substr(string.length - 1);
        var tagsSeparados = string.split(',');
        $('#emails').empty();
        for (i = 0; i < tagsSeparados.length; i++) {
            tag = tagsSeparados[i];
            if (tag != "") {
                $('#emails').append('<p class="email">' + tag + '</p>');
            }
        }
    }

    function crearChat() {
        var tituloChat = $('#tituloChat').val();
        $('#emails').empty();
        $('#tags').empty();
        $('form')[0].reset();
        $('form').before(
            '<div class="col-md-12 alert alert-success alert-dismissable">' +
            '<button type="button" class="close" ' +
            'data-dismiss="alert" aria-hidden="true">' +
            '&times;' +
            '</button>' +
            'El chat se ha creado correctamente.' +
            '</div>');
        $('.dropdown-divider').before('<a class="nav-link" id="v-pills-settings-tab-2" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-settings" aria-selected="false">' + tituloChat + '</a>');
        $('#contenidoChat').append('<div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-settings-tab"><?php require "../php/chats/chatVacio.php" ?></div>');
        $('.enviar').click(enviarMensaje);
    }

</script>
<div class="container">
    <div class="row">
        <div id="cabeceraChat" class="col-12">
            <h5>Crear nuevo chat</h5>
        </div>
    </div>
    <form>
        <div class="form-group">
            <label for="tituloChat">Título</label>
            <input type="text" class="form-control" id="tituloChat" placeholder="Introduzca el título">
        </div>
        <div class="form-group">
            <label for="tagsInput">Descripción</label>
            <textarea type="textarea" class="form-control" placeholder="Describa la finalidad del grupo" rows=5></textarea>
        </div>

        <div class="form-group">
            <label for="tagsInput">Etiquetas</label>
            <input type="text" class="form-control" id="tagsInput" placeholder="Separadas por comas ','">
            <div id="tags">

            </div>
        </div>

        <div class="form-group">
            <label for="emailsInput">Enviar invitación</label>
            <input type="text" class="form-control" id="emailsInput" placeholder="Emails separados por comas ','">
            <div id="emails">

            </div>
        </div>
        <input id="crearChat" class="btn btn-100" type="button" value="Crear">
    </form>
</div>