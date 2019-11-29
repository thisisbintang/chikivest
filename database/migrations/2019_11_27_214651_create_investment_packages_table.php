<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvestmentPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('totalCapital');
            $table->integer('income');
            $table->integer('breeder_id')->unsigned();
            $table->integer('grazier_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('doc_id')->unsigned();
            $table->integer('og_id')->unsigned();
            $table->integer('cpo_id')->unsigned();

            $table->foreign('breeder_id')->references('id')->on('breeders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('grazier_id')->references('id')->on('graziers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('doc_id')->references('id')->on('d_o_cs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('og_id')->references('id')->on('operational_graziers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cpo_id')->references('id')->on('chicken_price_offers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('investment_packages');
    }
}
