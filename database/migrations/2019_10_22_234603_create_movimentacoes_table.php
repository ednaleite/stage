<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->bigIncrements('idmovimentacao');
            $table->integer('idproduto');
            $table->string('datamovimentacao');
            $table->string('usuariomovimentacao');
            $table->tinyInteger('lotemovimentacao');
            $table->string('obsmovimentacao');
            $table->string('nomeunidademovimentacao');

        });
        DB::statement('ALTER TABLE movimentacoes CHANGE idmovimentacao idmovimentacao INT(8) ZEROFILL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentacoes');
    }
}
