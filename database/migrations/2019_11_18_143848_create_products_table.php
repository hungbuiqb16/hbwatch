<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('product_category_id');
            $table->text('description');
            $table->integer('origin');
            $table->string('code');
            $table->integer('status');
            $table->integer('gender');
            $table->integer('type');
            $table->string('size');
            $table->float('price');
            $table->integer('wire-type');
            $table->string('water-resistance');
            $table->string('image');
            $table->integer('warranty');
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
