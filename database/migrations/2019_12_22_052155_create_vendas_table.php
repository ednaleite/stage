<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->bigIncrements('idvenda');
            $table->integer('caixavenda');
            $table->string('metodopagamento');
            $table->string('datavenda');
        });

        DB::statement('ALTER TABLE vendas CHANGE idvenda idvenda INT(10) ZEROFILL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
