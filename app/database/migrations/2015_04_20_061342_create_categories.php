<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('categories', function($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('parent_id')->unsigned();
            $table->timestamps();
        });

        //create the product_category table
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('categories');
	}

}
