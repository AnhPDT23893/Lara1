<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

        Schema::create('customers', function($table) {
            $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->string('email');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('address');
           $table->string('phone');
           $table->string('age');
           $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('customers');
	}

}
