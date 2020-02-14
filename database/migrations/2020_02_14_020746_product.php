<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productname');
            $table->string('productcode');
            $table->string('image');
            $table->string('price');
            $table->string('promotionprice');
            $table->integer('amount');
            $table->integer('category');
            $table->integer('VAT');
            $table->integer('viewcount');
            $table->string('describe')->nullable();
            $table->string('hastag');
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
        //
    }
}
