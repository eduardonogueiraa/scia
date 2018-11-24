<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tema'); 
            $table->text('descricao'); 
            $table->integer('id_usuario')->unsigned()->nullable(); 
            $table->foreign('id_usuario')->references('id')->on('users'); 
            $table->integer('id_disciplina')->unsigned(); 
            $table->foreign('id_disciplina')->references('id')->on('disciplinas'); 
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
        Schema::dropIfExists('postagens');
    }
}
