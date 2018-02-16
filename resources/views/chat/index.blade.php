@extends('layouts.master')
<script>

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
				<div class="tab-pane fade" id="{{$chat->id_chat}}" role="tabpanel" aria-labelledby="{{$chat->id_chat}}-tab">{{$chat->id_chat}}</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop