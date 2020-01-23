<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamanhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamanhos', function (Blueprint $table) {
            $table->bigIncrements('idtamanho');
            $table->string('nometamanho');
        });
        DB::statement('ALTER TABLE tamanhos CHANGE idtamanho idtamanho INT(2) ZEROFILL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamanhos');
    }
}
