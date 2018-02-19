window.onload = function() {
    $(document).ready(function () {
        $('.enviar').click(enviarMensaje);
        primeraConexion();
    })
};

function enviarMensaje() {
    $.ajax({
        type: "POST",
        url: "enviar",
        data: $(this).closest("form").serialize(),
        success: function(data)
        {
            $("input[name='mensaje']").val("");
        }
    });
}

function primeraConexion() {
    var usuario = $('input[name="id_user"]').val();
    var tipoMensaje = "mensajeRecibido";
    $.ajax({
        type: "GET",
        url: "primera_conexion",
        success: function(mensajes)
        {
            mensajes.forEach(mensaje => {
                if(usuario == mensaje.id_usuario) {
                    tipoMensaje = "mensajeEnviado";
                }
                $("#"+mensaje.id_chat+" #mensajes").append(
                    $(
                        '<div class="row">' +
                            '<div class="col-1">' +
                                '<div class="circulo"></div>' +
                            '</div>' +
                            '<div class="col-8 mensaje '+tipoMensaje+'">' +
                                '<p>' +
                                    '<span>' + mensaje.user_id + '</span>' + ' ' +
                                    mensaje.created_at + 
                                '</p>' +
                                mensaje.contenido +
                            '</div>' +
                        '</div>'
                    )
                );
            });
        }
    });
}