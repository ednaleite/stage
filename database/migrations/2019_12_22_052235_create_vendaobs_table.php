<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendaobs', function (Blueprint $table) {
            $table->bigIncrements('idvendaobs');
            $table->integer('idvenda');
            $table->integer('idprodutovenda');
            $table->integer('quantidadevenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendaobs');
    }
}
