<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_item', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('orders_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('orders_id')->references('id')->on('orders');
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
		Schema::drop('order_item');
	}

}
