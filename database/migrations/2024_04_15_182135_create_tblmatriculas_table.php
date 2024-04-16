<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmatriculas', function (Blueprint $table) {
            $table->id('idMatricula');
            // $table->unsignedInteger('idMatricula')->primary(); // Definindo idMatricula como inteiro e chave primária
            $table->dateTime('dataInicioMatricula');
            $table->string('statusMatricula', 20);
            $table->unsignedInteger('idAluno')->length(11); // Definindo o tamanho do campo como INT(11)
            $table->unsignedInteger('idPlano')->length(11); // Definindo o tamanho do campo como INT(11)
            $table->foreign('idAluno')->references('idAluno')->on('alunos');
            $table->foreign('idPlano')->references('idPlano')->on('tblplanos');
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
        Schema::dropIfExists('tblmatriculas');
    }
};
