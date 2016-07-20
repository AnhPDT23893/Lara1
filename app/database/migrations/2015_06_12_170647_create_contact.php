<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContact extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('contacts', function($table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->string('comments');
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::drop('contacts');
	}

}
