var usuarios = [];
var colores = [];

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
    var usuario = $('input[name="user_id"]').val();
    var tipoMensaje = "mensajeRecibido";
    var offset = "";
    var circuloAntes = '<div class="col-1">' + '<div class="circulo"></div>' + '</div>';
    var circuloDespues = "";
    var color = "";
    $.ajax({
        type: "GET",
        url: "primera_conexion",
        success: function(mensajes)
        {
            mensajes.forEach(mensaje => {
                color = asignarColor(mensaje.user_id);
                if(usuario == mensaje.user_id) {
                    tipoMensaje = "mensajeEnviado";
                    offset = "offset-3";
                    circuloDespues = circuloAntes;
                    circuloAntes = "";
                }
                $("#"+mensaje.id_chat+" #mensajes").append(
                    $(
                        '<div class="row">' +
                            circuloAntes +
                            '<div class="col-8 mensaje '+offset+" "+tipoMensaje+'">' +
                                '<p>' +
                                    '<span style="color: '+color+'">' + mensaje.user_id + '</span>' + ' ' +
                                    mensaje.created_at + 
                                '</p>' +
                                mensaje.contenido +
                            '</div>' + 
                            circuloDespues +
                        '</div>'
                    )
                );
            });
        }
    });
}

function asignarColor(usuario) {
    for(i=0; i<usuarios.length; i++) {
        if(usuarios[i] == usuario) {
            return colores[i];
        }
    }
    color = '#' + Math.floor(Math.random()*16777215).toString(16);
    usuarios.push(usuario);
    colores.push(color);
    return color;
}