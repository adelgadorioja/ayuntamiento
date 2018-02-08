<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
   public function getIndex()
    {
         
       return view('noticias.index' /*, array('arrayDenuncias'=>Denuncias::all() )*/;
	}

    
    public function getCreate()
    {
        return view('noticias.crear');
    }

    public function getEdit($id)
    {
        return view('noticia.editar' /*, array(Movie::findOrFail($id+1),'id'=>$id)*/);
    }
}
