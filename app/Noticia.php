<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $primaryKey  = 'id_noticia';
    protected $table = 'Noticias';
}
