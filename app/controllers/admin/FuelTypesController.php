<?php namespace Controllers\admin;

class FuelTypesController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $fuelTypes = \FuelType::all();
        return \View::make('admin.fuelTypes.index',compact('fuelTypes'));
    }

    public function create(){

        return \View::make('admin.fuelTypes.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \FuelType::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \FuelType::create($input);

        return \Redirect::route('admin.fuelTypes.index');
    }

    public function edit($id){

        $fuelType = \FuelType::find($id);
        return \View::make('admin.fuelTypes.edit',compact('fuelType'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \FuelType::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $model = \FuelType::find($id);
        $model->update($input);


        return \Redirect::route('admin.fuelTypes.index');
    }


    public function destroy($id){

    }

}