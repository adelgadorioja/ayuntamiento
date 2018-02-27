<?php

namespace App\Http\Controllers;
use App\Noticia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;

class NoticiasController extends Controller
{
   public function mostrarNoticias()
    {
        //SELECT DISTINCT(categoria) FROM Noticias WHERE categoria is NOT NULL;
       $array = Noticia::orderBy('fecha', 'DESC')->get();
       $categorias = Noticia::DISTINCT('categoria')->get();
       return view('noticias.index', array('arrayNoticias'=> $array,'arrayCategorias'=>$categorias));
    }

    public function mostrarNoticiaPorCategoria($categoria){
        $array = Noticia::where('categoria',$categoria)->get();
        return $array;
    }

    public function crearNoticias()
    {
        return view('noticias.crear');
    }

    public function store(Request $request)
    {
        $noticia = new Noticia;
        $noticia->titulo = $request->input('titulo'); 
        $noticia->descripcion = $request->input('descripcion'); 
        $archivo = $request->file('imagen');
        $noticia->imagen = $archivo->getClientOriginalName();        
        $noticia->fecha = $request->input('fecha');
        $noticia->user_id = $request->input('id_user');     
        $noticia->categoria = $request->input('categoria');
        $noticia->importante = $request->input('fechaActual'); 

        if($noticia->fecha) {
            $noticiasImportantes = Noticia::where('importante','!=', null)->get();
            $noticiasImportantes->importante = null;
            $noticiasImportantes->update();
        }     

        $noticia->save();
        Storage::disk('local')->put($noticia->imagen,  \File::get($archivo));
        return view('noticias.crear');
    }    
}
