<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatroom;

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
        $mensaje->fecha = $request->input('fecha');
        $mensaje->user_id = $request->input('id_user');
        $mensaje->id_chat = $request->input('id_chat');
        $mensaje->save();
    }

    
}
