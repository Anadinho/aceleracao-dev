<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('analises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('documento_id')->constrained('documentos');
            $table->foreignId('assinatura_id')->constrained('assinaturas');
            $table->string('status', 45);
            $table->string('dataAnalise', 14);
            $table->integer('visualizadores');  
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
        Schema::dropIfExists('analises');
    }
}
