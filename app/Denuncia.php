<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    public $primaryKey  = 'id_denuncia';
    protected $table = 'Denuncias';
}
