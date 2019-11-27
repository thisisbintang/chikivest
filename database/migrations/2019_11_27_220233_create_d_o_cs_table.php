<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_o_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typeChicken');
            $table->integer('chickenPrice');
            $table->string('unit');
            $table->integer('breeder_id')->unsigned();

            $table->foreign('breeder_id')->references('id')->on('breeders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('d_o_cs');
    }
}
