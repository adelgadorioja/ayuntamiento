<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
   public function mostrarNoticias()
    {
         
       return view('noticias.index' /*, array('arrayNoticias'=>Noticias::all() */);
	}

    public function crearNoticias()
    {
        return view('noticias.crear');
    }

    
}
