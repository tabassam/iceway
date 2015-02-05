<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destinations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('port_name');
			$table->integer('country_id');
			$table->integer('rate_per_m3');
			$table->integer('rate_type');
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
		Schema::drop('destinations');
	}

}
