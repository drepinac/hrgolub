<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUzgajivacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzgajivacs', function (Blueprint $table) {
            $table->integer('id',  $autoIncrement = false)->primary();
            $table->string('naselje',100)->nullable();
            $table->string('adresa',500)->nullable();
            $table->string('duzina',20)->nullable();
            $table->string('sirina',20)->nullable();
            $table->string('aktivnost',1)->nullable();
            $table->string('ime',100)->nullable();
            $table->string('prezime',100)->nullable();
            $table->string('rodjenje',5)->nullable();
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
        Schema::dropIfExists('uzgajivacs');
    }
}
