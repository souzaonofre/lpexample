<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVisitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            //
            $table->string('nome')->comment('Nome completo do Visitante');
            $table->string('email')->comment('Email valido do Visitante');
            $table->string('celular')->comment('Tel. Celular do Visitante');
            //
            $table->date('data_nascimento')->comment('Data de Nascimento do Visitante');
            //
            $table->string('cep')->comment('CEP valido do endereço do Visitante');
            //
            $table->string('endereco')->comment('Endereço completo com numero');
            $table->string('bairro')->comment('Bairro onde se encontra a endereço');
            $table->string('cidade')->comment('Cidade onde se encontra a endereço');
            $table->string('uf')->comment('Sigla do Estado onde se encontra a endereço');
            //
            $table->timestamps();
            //
            $table->charset = 'utf8';
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitantes');
    }
}
