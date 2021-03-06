<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrijavaGolubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijava_golubs', function (Blueprint $table) {
            $table->integer('sna_godina',  $autoIncrement = false);
            $table->integer('uac_id',  $autoIncrement = false);
            $table->integer('gub_id',  $autoIncrement = false);
            $table->string('stari',1);
            $table->primary(array('sna_godina','uac_id','gub_id','stari'));
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
        Schema::dropIfExists('prijava_golubs');
    }
}
