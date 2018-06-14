<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrijavaUzgajivacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijava_uzgajivacs', function (Blueprint $table) {
            $table->integer('uac_id',  $autoIncrement = false);
            $table->string('kub_klub',3);
            $table->integer('sna_godina', $autoIncrement = false);
            $table->string('sifra_uzgajivaca',3)->nullable();
            $table->string('stari',1);
            $table->string('tipes',1)->nullable();
            $table->primary(array('uac_id','sna_godina','stari'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijava_uzgajivacs');
    }
}
