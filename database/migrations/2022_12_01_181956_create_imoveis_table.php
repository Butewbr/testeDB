<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('empresa_id');
            $table->unsignedInteger('tipo_imovel_id');
            $table->string('nome');
            $table->string('descricao');
            $table->enum('status', [
                'Ativo',
                'Locado',
            ]);
            $table->timestamps();

            $table->foreign('empresa_id')
                ->on('empresas')
                ->references('id');

            $table->foreign('tipo_imovel_id')
                ->on('tipo_imovel')
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
        Schema::dropIfExists('imoveis');
    }
}
