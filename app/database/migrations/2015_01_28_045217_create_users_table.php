<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->integer('fax')->nullable();
			$table->integer('mobile')->nullable();
			$table->string('skype')->nullable();
			$table->string('full_name')->nullable();
			$table->date('birth_date')->nullable();
			$table->string('country')->nullable();
			$table->string('company')->nullable();
			$table->integer('phone')->nullable();
			$table->tinyInteger('newsletter')->nullable();
			$table->string('email')->nullable();
			$table->integer('member_type')->nullable();
			$table->string('register_code')->nullable();
			$table->boolean('is_register')->default('0');
			$table->string('knowledge_source')->nullable();
			$table->string('remember_token')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * php artisan migrate:rollback
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
