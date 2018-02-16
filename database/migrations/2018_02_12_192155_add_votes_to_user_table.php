<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Denuncias', function (Blueprint $table) {
            $table->string('respuesta')->nullable();
        });  

        Schema::table('users', function (Blueprint $table) {
            $table->integer('tipoUsuario')->default(0);
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Denuncias', function (Blueprint $table) {
            $table->dropColumn('respuesta');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tipoUsuario');
        });
    }
}
