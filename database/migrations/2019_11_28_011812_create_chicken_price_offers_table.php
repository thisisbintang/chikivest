<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChickenPriceOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chicken_price_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codePriceOffer')->nullable();
            $table->integer('chickenPriceOffer')->nullable();
            $table->integer('seller_id')->unsigned();

            $table->foreign('seller_id')->references('id')->on('sellers');
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
        Schema::drop('chicken_price_offers');
    }
}
