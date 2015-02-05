<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerVoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_voices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('from_name');
			$table->string('subject');
			$table->integer('country_id');
			$table->string('customer_comments');
			$table->integer('company_id');
			$table->integer('model_id');
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
		Schema::drop('customer_voices');
	}

}
