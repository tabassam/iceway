<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//Seed the countries
		$this->call('CountriesSeeder');
		$this->command->info('Seeded the countries!');
	}

}
