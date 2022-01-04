<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepublicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('republicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('nome', 100);
            $table->integer('quant_quartos');
            $table->integer('preco');
            $table->string('descricao');
            $table->string('regras');
            $table->string('contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('republicas');
    }
}
