<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrijavaKlubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijava_klubs', function (Blueprint $table) {
            $table->integer('sna_godina',  $autoIncrement = false);
            $table->string('kub_klub',2);
            $table->string('luk_luk',3);
            $table->string('stari',1);
            $table->primary(array('sna_godina','kub_klub','luk_luk','stari'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijava_klubs');
    }
}
