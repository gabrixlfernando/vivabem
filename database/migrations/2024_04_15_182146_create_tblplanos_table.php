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
        Schema::create('tblplanos', function (Blueprint $table) {
            $table->id('idPlano');
            $table->string('nomePlano', 50);
            $table->string('descricaoPlano', 150);
            $table->double('valorPlano', 10, 2);
            $table->string('statusPlano', 20);
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
        Schema::dropIfExists('tblplanos');
    }
};
