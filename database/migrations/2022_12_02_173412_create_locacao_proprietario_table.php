<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacaoProprietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locacao_proprietario', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('empresa_id');
            $table->unsignedInteger('locacao_id');
            $table->unsignedInteger('cliente_id');
            $table->timestamps();

            $table->foreign('empresa_id')
                ->on('empresas')
                ->references('id');

            $table->foreign('locacao_id')
                ->on('locacoes')
                ->references('id');

            $table->foreign('cliente_id')
                ->on('clientes')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacao_proprietario');
    }
}
