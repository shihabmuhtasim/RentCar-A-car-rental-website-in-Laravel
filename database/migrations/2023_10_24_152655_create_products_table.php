<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_title');
            $table->string('product_description');
            $table->string('catagory_id');
            $table->string('brand_id');
            $table->string('image')->nullable();
            $table->string('vendor_name')->nullable();
            $table->integer('price');
            $table->integer('discounted_price')->nullable();
            $table->integer('product_capacity');
            $table->integer('days');
            $table->string('product_lisence');
            $table->string('product_gear');
            $table->string('product_driver');
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
        Schema::dropIfExists('products');
    }
};
