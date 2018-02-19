window.onload = function() {
    $(document).ready(function () {
        $('.enviar').click(enviarMensaje);
    })
};

function enviarMensaje() {
    $.ajax({
        type: "POST",
        url: "enviar",
        data: $(this).closest("form").serialize(),
        success: function(data)
        {
            // TODO
        }
    });
}