<?php namespace Controllers\admin;

class TransmissionsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $transmissions = \Transmission::all();
        return \View::make('admin.transmissions.index',compact('transmissions'));
    }

    public function create(){

        return \View::make('admin.transmissions.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Transmission::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Transmission::create($input);

        return \Redirect::route('admin.transmissions.index');
    }

    public function edit($id){

        $transmission = \Transmission::find($id);
        return \View::make('admin.transmissions.edit',compact('transmission'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Transmission::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $transmission = \Transmission::find($id);
        $transmission->update($input);


        return \Redirect::route('admin.transmissions.index');
    }


    public function destroy($id){

    }

}