<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('idproduto');
            $table->string('nomeproduto');
            $table->string('descproduto');
            $table->string('categoriaproduto');
            $table->string('sku')->nullable();
            $table->string('ean')->nullable();
            $table->string('img')->nullable();
            $table->string('ref')->nullable();
            $table->string('wms')->nullable();
            $table->tinyInteger('estqminproduto');
            $table->bigInteger('quantidade');
            $table->float('valatacproduto', 5, 2)->nullable();
            $table->float('valvareproduto', 5, 2);
            $table->tinyInteger('quantidadeatacproduto');
            $table->string('ncmcodproduto')->nullable();
            $table->string('ncmdescproduto')->nullable();
            $table->string('unimedproduto');
            $table->string('local');
            $table->integer('idcor')->nullable();
            $table->integer('idtamanho')->nullable();
        });
        DB::statement('ALTER TABLE produtos CHANGE idproduto idproduto INT(4) ZEROFILL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
