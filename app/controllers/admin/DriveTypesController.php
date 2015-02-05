<?php namespace Controllers\admin;

class DriveTypesController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $driveTypes = \DriveType::all();
        return \View::make('admin.driveTypes.index',compact('driveTypes'));
    }

    public function create(){

        return \View::make('admin.driveTypes.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \DriveType::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \DriveType::create($input);

        return \Redirect::route('admin.driveTypes.index');
    }

    public function edit($id){

        $driveType = \DriveType::find($id);
        return \View::make('admin.driveTypes.edit',compact('driveType'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \DriveType::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $driveTypes = \DriveType::find($id);
        $driveTypes->update($input);


        return \Redirect::route('admin.driveTypes.index');
    }


    public function destroy($id){

    }

}