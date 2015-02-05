<?php

/*
 * Irfan Ali (0321-729-4246)
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

/**
 * Start Admin Routes
 */
Route::group(['prefix'=>'admin','before'=>'guest']	,function(){
	Route::get('/login','Controllers\\admin\\UsersController@login');
	Route::post('/login','Controllers\\admin\\UsersController@do_login');
});

//Auth Routes
Route::group(array('prefix'=>'admin','before' => 'auth'), function()
{
	/*
	 * Start Ajax Requests
	 */
	Route::get('models/all','Controllers\\admin\\ModelsController@all');
	Route::get('bodyStyleChildren/all','Controllers\\admin\\BodyStyleChildrenController@all');
	Route::get('check_reference_no','Controllers\\admin\\ProductsController@check_reference_no');
	Route::get('products/order_as','Controllers\\admin\\ProductsController@order_as');

	/*
	 * End Ajax Requests
	 */

	Route::get('/','Controllers\\admin\\DashboardController@index');
	Route::resource('products', 'Controllers\\admin\\ProductsController');
	Route::resource('companies', 'Controllers\\admin\\CompaniesController');
	Route::resource('models', 'Controllers\\admin\\ModelsController');
	Route::resource('bodyStyleMaster', 'Controllers\\admin\\BodyStyleMasterController');
	Route::resource('bodyStyleChildren', 'Controllers\\admin\\BodyStyleChildrenController');
	Route::resource('fuelTypes', 'Controllers\\admin\\FuelTypesController');
	Route::resource('colors', 'Controllers\\admin\\ColorsController');
	Route::resource('steerings', 'Controllers\\admin\\SteeringsController');
	Route::resource('transmissions', 'Controllers\\admin\\TransmissionsController');
	Route::resource('conditions', 'Controllers\\admin\\ConditionsController');
	Route::resource('driveTypes', 'Controllers\\admin\\DriveTypesController');
	Route::resource('destinations', 'Controllers\\admin\\DestinationsController');
	Route::resource('inspections', 'Controllers\\admin\\InspectionsController');
	Route::resource('customerVoices', 'Controllers\\admin\\CustomerVoicesController');
	Route::resource('banners', 'Controllers\\admin\\BannersController');
	Route::get('logout','Controllers\\admin\\UsersController@logout');

});


/*
 * End Admin Routes
 */