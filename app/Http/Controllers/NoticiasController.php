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
       $array = Noticia::orderBy('importante', 'DESC')->orderBy('fecha', 'DESC')->get();
       foreach($array as $noticia) {
           if($noticia->importante != null) {
            $date = date_create();
            date_sub($date,date_interval_create_from_date_string("7 days"));
            if($noticia->importante < $date) {
                $noticia->importante = null;
                $noticia->save();
            }
           }
       }
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

        if($noticia->importante != "" && $noticia->importante != null) {
            $noticiasImportantes = Noticia::where('importante','!=', null)->get();
            foreach ($noticiasImportantes as $noticiaImportante) {
                $noticiaImportante->importante = null;
                $noticiaImportante->save();
            }   
        }

        $noticia->save();
        Storage::disk('local')->put($noticia->imagen,  \File::get($archivo));
        return view('noticias.crear');
    }

    public function eliminarNoticias($idNoticia)
    {
        $array = Noticia::find($idNoticia);
        $array->delete();
    }    
}
