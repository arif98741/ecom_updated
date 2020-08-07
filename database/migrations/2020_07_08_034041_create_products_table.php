<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name');
            $table->integer('shop_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('color_id')->unsigned()->nullable();
            $table->string('model');
            $table->double('price', 10, 2);
            $table->double('sale_price', 10, 2);
            $table->string('fea_image1')->nullable();
            $table->string('fea_image2')->nullable();
            $table->string('fea_image3')->nullable();
            $table->string('fea_image4')->nullable();
            $table->string('fea_image5')->nullable();
            $table->string('fea_image6')->nullable();
            $table->string('fea_image7')->nullable();
            $table->longText('description');
            $table->string('offer')->nullable();
            $table->foreign('shop_id')->references('id')->on('shops')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('set null')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('set null')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onUpdate('set null')->onDelete('cascade');
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
}
