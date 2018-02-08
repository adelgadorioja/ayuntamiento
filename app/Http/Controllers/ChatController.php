<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function mostrarIndex() // devolvera todos los chats 
    {         
       return view('chat.index' /*, array('arrayDenuncias'=>Denuncias::all() */);
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

    
}
