window.onload = function() {
    $(document).ready(function () {
        $('.enviar').click(enviarMensaje);
    })
};

function enviarMensaje() {
    $.ajax({
        type: "POST",
        url: "{{asset('chat/enviar')}}",
        data: $(this).closest("form").serialize(),
        success: function(data)
        {
            // TODO
        }
    });
}