<?php namespace Controllers\admin;

class SteeringsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $steerings = \Steering::all();
        return \View::make('admin.steerings.index',compact('steerings'));
    }

    public function create(){

        return \View::make('admin.steerings.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Steering::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Steering::create($input);

        return \Redirect::route('admin.steerings.index');
    }

    public function edit($id){

        $steering = \Steering::find($id);
        return \View::make('admin.steerings.edit',compact('steering'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Steering::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $steering = \Steering::find($id);
        $steering->update($input);


        return \Redirect::route('admin.steerings.index');
    }


    public function destroy($id){

    }

}