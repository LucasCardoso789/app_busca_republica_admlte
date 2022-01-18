<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('republica_id');
            $table->char('rua', 50);
            $table->string('numero', 5);
            $table->string('complemento')->nullable();
            $table->char('bairro', 50);  
            $table->string('estado');     
            $table->string('cidade'); 
            $table->integer('cep');        
            $table->timestamps();

            //FK
            $table->foreign('republica_id')->references('id')->on('republicas');
            $table->unique('republica_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
