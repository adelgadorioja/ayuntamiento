<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatroom;
use App\Mensaje;

class ChatController extends Controller
{
    public function mostrarIndex() // devolvera todos los chats 
    {         
       return view('chat.index', array('chatsDisponibles'=>Chatroom::all()));
	}

    public function mostrarchat($id) // id del chat
    {
        return view('chat.mostrarchat' /*, array('denuncia'=>Movie::findOrFail($id+1), 'id'=>$id)*/);
    }

    
    public function creaChatroom() //creac
    {
        return view('chat.crear');
    }

     public function creaChatPrivado() //creac
    {
        return view('chat.creaChatPrivado');
    }

    public function enviar(Request $request)
    {
        $mensaje = new Mensaje;
        $mensaje->contenido = $request->input('mensaje');
        $mensaje->user_id = $request->input('user_id');
        $mensaje->id_chat = $request->input('id_chat');
        $mensaje->save();
    }

    public function primeraConexion($id_chat) {
        $date = date_create();
        date_sub($date,date_interval_create_from_date_string("1 hour"));

        $mensajes = Mensaje::with('users')
        ->where('id_chat', $id_chat)
        ->where('created_at', '>', $date)
        ->orderBy('created_at', 'DESC')
        ->get();

        if(count($mensajes) == 0) {
            $mensajes = Mensaje::where('id_chat', $id_chat)
            ->orderBy('created_at', 'DESC')
            ->limit(20)
            ->with('users')
            ->get();
        }

        return $mensajes;
    }

    public function recibirMensajes() {
        $mensajes = Mensaje::with('users')->get();
        //return $mensajes;
    }
}