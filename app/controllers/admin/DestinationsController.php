<?php namespace Controllers\admin;

class DestinationsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $destinations = \Destination::all();
        return \View::make('admin.destinations.index',compact('destinations'));
    }

    public function create(){

        $countries = \Country::lists('name','id');
        return \View::make('admin.destinations.create',compact('countries'));
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Destination::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Destination::create($input);

        return \Redirect::route('admin.destinations.index');
    }

    public function edit($id){

        $countries = \Country::lists('name','id');
        $destination = \Destination::find($id);
        return \View::make('admin.destinations.edit',compact('destination','countries'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Destination::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $destination = \Destination::find($id);
        $destination->update($input);


        return \Redirect::route('admin.destinations.index');
    }


    public function destroy($id){

    }

}