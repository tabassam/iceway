<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerVoiceImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_voice_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image_1');
			$table->string('image_2');
			$table->string('flag_image');
			$table->integer('customer_voice_id');
			$table->string('flag_country');
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
		Schema::drop('customer_voice_images');
	}

}
