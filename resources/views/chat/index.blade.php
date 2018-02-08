@extends('layouts.master')
      <script>
        $(function() {
            $('.enviar').click(enviarMensaje);
            bajarScrollChat();
        })

        function enviarMensaje() {
            var numChat = ($('div.active').attr('id').replace('v-pills-',''));
            var ultimoMensaje = $('#ventanaChat'+numChat+' .mensaje').last().parent();
            var mensaje = $('#mensaje'+numChat).val();
            ultimoMensaje.after($('<div class="row"><div class="offset-3 col-8 mensaje mensajeEnviado">'+mensaje+'</div><div class="col-1"><div class="circulo"></div></div></div>'));
            $('#mensaje'+numChat).val("");
            bajarScrollChat();
        }

        function bajarScrollChat() {
            for (var i=0; i<$('.ventanaChat').length; i++) {
                $('.ventanaChat')[i].scrollTop = $('.ventanaChat')[i].scrollHeight;
            }  
        }
    </script>
 
@section('content')
<div class="container">
  <div class="container">
    <div id="chats" class="row caja">
        <div id="chatsDisponibles" class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">Chat 1</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-profile" aria-selected="false">Chat 2</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chat 3</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-settings" aria-selected="false">Chat 4</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">Crear nuevo chat</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-settings" aria-selected="false">Unirse a un chat</a>
      </div>
      <div id="contenidoChat" class="col-md-9 tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">{{Config::get('chats1.php')}}</div>
          <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">Config::get('chats2.php')</div>
          <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">Config::get('chats3.php')</div>
          <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-settings-tab">Config::get('chats4.php')</div>
          <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">Config::get('crearChat.php')</div>
          <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-settings-tab">Config::get('unirseChat.php')</div>
      </div>
  </div>
</div>
</div>
@stop


