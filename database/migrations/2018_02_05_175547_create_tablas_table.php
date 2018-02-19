<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Denuncias', function (Blueprint $table) {
            $table->increments('id_denuncia');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('localizacion');
            $table->integer('atendidoPor')->nullable();  // si es null aun no ha sido atentido, si esta atentida    contendrá el id del administrador que la ha atendido     
            $table->date('fecha');
            $table->integer('user_id')->unsigned();  // id usuario
            $table->foreign('user_id')->references('id')->on('users');  
            $table->timestamps();
        });


        Schema::create('Noticias', function (Blueprint $table) {
            $table->increments('id_noticia');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->date('fecha'); 
            $table->integer('user_id')->unsigned(); // id usuario 
            $table->foreign('user_id')->references('id')->on('users');  
            $table->timestamps();
        });

        Schema::create('chatRooms', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->string('titulo');
            $table->string('descripcion');           
            $table->timestamps();
        });

        Schema::create('msjChat', function (Blueprint $table) {
            $table->increments('id_msj');
            $table->string('contenido');

            $table->integer('user_id')->unsigned(); // id usuario    
            $table->integer('id_chat')->unsigned();    // id del chat   

            $table->foreign('user_id')->references('id')->on('users');  
            $table->foreign('id_chat')->references('id_chat')->on('chatRooms');  
            $table->timestamps();
        });

        Schema::create('chatPrivados', function (Blueprint $table) {            
            $table->integer('id_usuario1'); 
            $table->integer('id_usuario2');

            $table->integer('id_chat')->unsigned();
            $table->foreign('id_chat')->references('id_chat')->on('msjChat');  
            $table->timestamps();
        });

        Schema::create('usu_chat', function (Blueprint $table) {            
            $table->integer('id'); 
            $table->integer('id_chat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Denuncias');
        Schema::dropIfExists('Noticias');
        Schema::dropIfExists('chatRooms');
        Schema::dropIfExists('msjChat');
        Schema::dropIfExists('chatPrivados');
        Schema::dropIfExists('usu_chat');
    }
}
