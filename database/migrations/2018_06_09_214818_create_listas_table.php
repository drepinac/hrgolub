<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->integer('sna_godina',  $autoIncrement = false);
            $table->string('luk_luk',3);
            $table->integer('uac_id');
            $table->integer('gub_id');
            $table->string('trka',2)->nullable();
            $table->date('datum_trke')->nullable();
            $table->string('mjesto',100)->nullable();
            $table->string('duzina',15)->nullable();
            $table->string('sirina',15)->nullable();
            $table->string('vrijeme_pustanja',10)->nullable();
            $table->date('datum_pokretanja')->nullable();
            $table->string('vrijeme_pokretanja',10)->nullable();
            $table->date('datum_zaustavljanja')->nullable();
            $table->string('vrijeme_zaustavljanja',10)->nullable();
            $table->string('vrijeme',100)->nullable();
            $table->string('lista',30)->nullable();
            $table->integer('tip_liste')->nullable();
            $table->string('klub',2)->nullable();
            $table->string('naziv_kluba',100)->nullable();
            $table->integer('uzgajivaca')->nullable();
            $table->integer('golubova')->nullable();
            $table->integer('plasmana')->nullable();
            $table->integer('rb_liste')->nullable();
            $table->integer('tim')->nullable();
            $table->integer('dan')->nullable();
            $table->string('vrijeme_prispjeca',10)->nullable();
            $table->string('kprispio',30)->nullable();
            $table->decimal('brzina',18,4)->nullable();
            $table->decimal('bod',18,4)->nullable();
            $table->decimal('bod_20',18,4)->nullable();
            $table->decimal('koef',18,4)->nullable();
            $table->decimal('koef_20',18,4)->nullable();
            $table->integer('stvarna_udaljenost')->nullable();
            $table->integer('srednja_udaljenost')->nullable();
            $table->integer('srednja_udaljenost_sl')->nullable();
            $table->string('stari',1);
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
        Schema::dropIfExists('listas');
    }
}
