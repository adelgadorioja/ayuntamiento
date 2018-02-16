<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    public $primaryKey  = 'id_chat';
    protected $table = 'chatRooms';
}
