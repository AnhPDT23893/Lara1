<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('products', function($table) {
            $table->increments('id')->unsigned();
            $table->string('name_product');
            $table->integer('category_id')->unsigned();
            $table->integer('price')->unsigned();
            $table->integer('special_price')->nullable();
            $table->string('path');
            $table->string('description');
            $table->string('size');
            $table->string('color');
            $table->string('status');
            $table->integer('quantity')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
		Schema::drop('products');
	}

}
