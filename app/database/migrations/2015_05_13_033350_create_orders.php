<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //
        Schema::create('orders' , function($table) {
           $table->increments('id');;
           $table->integer('grand_total');
           $table->string('status');
            $table->string('ship_to');
           $table->integer('customer_id')->unsigned();
           $table->integer('ship_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('ship_id')->references('id')->on('ship');
            $table->timestamps();
        });
        //

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('orders');
	}

}
