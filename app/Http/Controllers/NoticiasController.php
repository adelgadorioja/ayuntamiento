<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
   public function getIndex()
    {
         
       return view('noticia.index' /*, array('arrayDenuncias'=>Denuncias::all() )*/;
	}

    public function getShow($id) // id de la denuncia
    {
        return view('noticia.show' /*, array('denuncia'=>Movie::findOrFail($id+1), 'id'=>$id)*/);
    }

    
    public function getCreate()
    {
        return view('noticia.create');
    }

    public function getEdit($id)
    {
        return view('noticia.edit' /*, array(Movie::findOrFail($id+1),'id'=>$id)*/);
    }
}
