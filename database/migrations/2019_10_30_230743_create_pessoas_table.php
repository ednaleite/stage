<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('idpessoa');
            $table->string('nomepessoa')->unique();
            $table->string('cpfcnpjpessoa')->unique();
            $table->string('ceppessoa')->unique();
            $table->string('emailpessoa')->unique();
            $table->string('enderecopessoa');
            $table->integer('fonepessoa');
            $table->integer('fone2pessoa')->nullable();
            $table->integer('fone3pessoa')->nullable();
            $table->integer('fone4pessoa')->nullable();
            $table->string('obspessoa');
            $table->tinyInteger('clientepessoa');
            $table->tinyInteger('fornecedorpessoa');
            $table->string('senhapessoa');

        });
        DB::statement('ALTER TABLE pessoas CHANGE idpessoa idpessoa INT(5) ZEROFILL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
