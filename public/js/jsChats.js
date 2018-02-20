var usuarios = [];
var colores = [];
var id_chat = 1;

window.onload = function () {
    $(document).ready(function () {
        $('.enviar').click(enviarMensaje);
        $('a[role="tab"]').click(primeraConexion);
        $('.enviar').click(recibirMensajes);
        setInterval('recibirMensajes()',3000);
    })
};

function enviarMensaje() {
    $.ajax({
        type: "POST",
        url: "enviar",
        data: $(this).closest("form").serialize(),
        success: function (data) {
            $("input[name='mensaje']").val("");
        }
    });
}

function primeraConexion() {
    id_chat = $(this).attr('aria-controls');
    $.ajax({
        type: "GET",
        url: "primera_conexion/"+id_chat,
        success: function (mensajes) {
            mensajes.reverse();
            mensajes.forEach(mensaje => {
                mostrarMensaje(mensaje);
            });
        }
    });
}

function recibirMensajes() {
    $.ajax({
        type: "GET",
        url: "primera_conexion/"+id_chat,
        success: function (mensajes) {
            mensajes.forEach(mensaje => {
                mensajes.reverse();
                if (mensaje.created_at > $("#" + mensaje.id_chat + " .fecha").last().text()) {
                    mostrarMensaje(mensaje);
                }
            });
        }
    });
}

function asignarColor(usuario) {
    for (i = 0; i < usuarios.length; i++) {
        if (usuarios[i] == usuario) {
            return colores[i];
        }
    }
    color = '#' + Math.floor(Math.random() * 16777215).toString(16);
    usuarios.push(usuario);
    colores.push(color);
    return color;
}

function mostrarMensaje(mensaje) {
    usuario = $("input[name='user_id']").val();
    tipoMensaje = "mensajeRecibido";
    offset = "";
    circuloAntes = '<div class="col-1">' + '<div class="circulo"></div>' + '</div>';
    circuloDespues = "";
    color = asignarColor(mensaje.user_id);
    if (usuario == mensaje.user_id) {
        tipoMensaje = "mensajeEnviado";
        offset = "offset-3";
        circuloDespues = circuloAntes;
        circuloAntes = "";
    }
    $("#" + mensaje.id_chat + " #mensajes").append(
        $(
            '<div class="row">' +
            circuloAntes +
            '<div class="col-8 mensaje ' + offset + " " + tipoMensaje + '">' +
            '<p>' +
            '<span style="color: ' + color + '">' + mensaje.users.name + '</span>' + ' ' +
            '<span class="fecha">' + mensaje.created_at + '</span>' +
            '</p>' +
            mensaje.contenido +
            '</div>' +
            circuloDespues +
            '</div>'
        )
    );
}