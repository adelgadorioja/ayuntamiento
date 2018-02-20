<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'msjChat';

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
