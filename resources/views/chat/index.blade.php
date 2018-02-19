@extends('layouts.master')
<script src="{{ asset('js/jsChats.js') }}">

</script> @section('content')
<div class="container">
	{{ Breadcrumbs::render('chats') }}
	<div class="container">
		<div id="chats" class="row caja">
			<div id="chatsDisponibles" class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				@foreach( $chatsDisponibles as $key => $chat )
				<a class="nav-link" id="{{$chat->id_chat}}-tab" data-toggle="pill" href="#{{$chat->id_chat}}" role="tab" aria-controls="{{$chat->id_chat}}"
				 aria-selected="true">
					{{$chat->titulo}}
				</a>
				@endforeach
			</div>
			<div id="contenidoChat" class="col-md-9 tab-content" id="v-pills-tabContent">
				@foreach( $chatsDisponibles as $key => $chat )
				<div class="tab-pane fade" id="{{$chat->id_chat}}" role="tabpanel" aria-labelledby="{{$chat->id_chat}}-tab">
					<div class="container">
						<div class="row">
							<div id="cabeceraChat" class="col-12">
								<h5>{{$chat->titulo}}</h5>
								<h6>X miembros</h6>
							</div>
						</div>
						<div class="ventanaChat">
							<div id="mensajes" class="container">

							</div>
						</div>
						<div id="inputMensaje">
							<form>
								{{ csrf_field() }}
								<input type="hidden" name="fecha" value="{{date('Y-m-d H:i:s')}}">
								<input type="hidden" name="id_user" value="{{Auth::id()}}">
								<input type="hidden" name="id_chat" value="{{$chat->id_chat}}">
								<div class="row">
									<div class="input-group mb-3">
										<input name="mensaje" type="text" class="form-control" placeholder="Introduzca su mensaje" aria-label="Recipient's username"
										 aria-describedby="basic-addon2">
										<div class="input-group-append">
											<span class="enviar input-group-text" id="basic-addon2">Enviar</span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop