<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperationalGraziersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational_graziers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grazier_id')->unsigned();
            $table->string('operationalCode')->nullable();
            $table->integer('cost')->nullable();

            $table->foreign('grazier_id')->references('id')->on('graziers');
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
        Schema::drop('operational_graziers');
    }
}
