<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('stock_no');
			$table->tinyInteger('neworupdated');
			$table->string('title');
			$table->string('reference_no');
			$table->string('chassis_no');
			$table->string('model_code');
			$table->string('tcv_img_url');
			$table->string('tcv_id');
			$table->string('product_name');
			$table->string('product_title');
			$table->string('description');
			$table->string('location');
			$table->string('year_of_make');
			$table->string('month_of_make');
			$table->integer('model_id');
			$table->integer('model_id2');
			$table->string('odometer');
			$table->string('displacement');
			$table->string('steering');
			$table->string('transmission');
			$table->integer('doors');
			$table->string('seating_capacity');
			$table->string('fuel_type');
			$table->integer('drive_type');
			$table->decimal('price');
			$table->string('custom_price');
			$table->integer('use_custom_price');
			$table->string('tcv_price');
			$table->string('currency');
			$table->string('exterior_color');
			$table->string('interior_color');
			$table->string('weight');
			$table->string('length');
			$table->string('width');
			$table->string('height');
			$table->string('burden');
			$table->string('condition');
			$table->string('air_conditioning');
			$table->string('auction_point');
			$table->string('seat_belt');
			$table->string('engine_type');
			$table->string('spare_key');
			$table->text('other_options');
			$table->text('other_comments');
			$table->text('special_offer');
			$table->string('added_by');
			$table->integer('updated_by');
			$table->date('expiry_date');
			$table->date('register_date');
			$table->string('grade');
			$table->integer('sold');
			$table->integer('estimator_sold');
			$table->date('estimator_sold_date');
			$table->string('deleted');
			$table->integer('product_order');
			$table->decimal('sale_price');
			$table->string('price_type');
			$table->string('m3_value');
			$table->integer('body_style_master_id');
			$table->integer('body_style_child_id');
			$table->text('mechanical_problem');
			$table->string('buyer_name');
			$table->string('buyer_email');
			$table->string('buyer_phone');
			$table->string('buyer_address');
			$table->string('consignee_name');
			$table->string('consignee_phone');
			$table->string('consignee_email');
			$table->string('consignee_address');
			$table->string('first_payment');
			$table->date('first_payment_date');
			$table->string('second_payment');
			$table->date('second_payment_date');
			$table->string('third_payment');
			$table->date('third_payment_date');
			$table->integer('inspection_id');
			$table->integer('destination_id');
			$table->string('invoice_file');
			$table->string('custom_clearing_file');
			$table->string('b_l_copy_file');
			$table->string('original_doc_file');
			$table->text('comments');
			$table->date('date_sold');
			$table->string('who_sold');
			$table->string('bought_from');
			$table->string('buying_date');
			$table->decimal('buying_price');
			$table->string('current_mileage');
			$table->string('mileage_on_paper');
			$table->string('engine_number');
			$table->string('veh_location');
			$table->string('registration_month');
			$table->string('veh_grade');
			$table->text('last_values');
			$table->date('tcv_update');
			$table->tinyInteger('pay_trade');
			$table->string('site');
			$table->text('hidden_comments');
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
		Schema::drop('products');
	}

}
