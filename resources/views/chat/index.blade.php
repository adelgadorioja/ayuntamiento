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
{{ Breadcrumbs::render('chats') }}
  <div class="container">
    <div id="chats" class="row caja">
        <div id="chatsDisponibles" class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">Chat 1</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">Crear nuevo chat</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-settings" aria-selected="false">Unirse a un chat</a>
      </div>
      <div id="contenidoChat" class="col-md-9 tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">

<div class="container">
	<div class="row">
		<div id="cabeceraChat" class="col-12">
			<h5>Chat 1</h5>
			<h6>12 integrantes</h6>
		</div>
	</div>
	<div class="ventanaChat" id="ventanaChat1">
		<div class="container">
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
                    <p>17:20 <span style="color: green;">Carlos</span></p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
                <p>17:22 <span style="color: red;">Natalia</span></p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<div class="circulo"></div>
				</div>
				<div class="col-8 mensaje mensajeRecibido">
                <p>17:28 <span style="color: red;">Natalia</span></p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
			</div>
			<div class="row">
				<div class="offset-3 col-8 mensaje mensajeEnviado">
                <p>18:10 <span style="color: #72a8ff;">Tú</span></p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-1">
					<div class="circulo"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="inputMensaje">
		<div class="row">
			<div class="input-group mb-3">
				<input id="mensaje1" type="text" class="form-control" placeholder="Introduzca su mensaje" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<span class="enviar input-group-text" id="basic-addon2">Enviar</span>
				</div>
			</div>
		</div>
	</div>

</div>

          </div>
      </div>
  </div>
</div>
</div>
@stop


