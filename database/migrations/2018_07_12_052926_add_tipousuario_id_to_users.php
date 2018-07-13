<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipousuarioIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->unsignedInteger('tipousuario_id');
            $table->foreign('tipousuario_id')->references('id')->on('tipousuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users',function(Blueprint $table){
            $table->dropForeign(['tipousuario_id']);
            $table->dropColumn('tipousuario_id');
        });
    }
}
