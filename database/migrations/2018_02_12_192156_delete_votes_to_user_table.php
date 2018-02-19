<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteVotesToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('msjChat', function (Blueprint $table) {
            $table->dropColumn('fecha');
        });
    }
}
