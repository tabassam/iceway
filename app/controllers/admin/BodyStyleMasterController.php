<?php namespace Controllers\admin;

class BodyStyleMasterController extends \BaseController {

    public function __construct(){

    }

    public function index(){

        $bodyStyleMasters = \BodyStyleMaster::all();
        return \View::make('admin.bodyStyleMaster.index',compact('bodyStyleMasters'));
    }

    public function create(){

        return \View::make('admin.bodyStyleMaster.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \BodyStyleMaster::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \BodyStyleMaster::create($input);

        return \Redirect::route('admin.bodyStyleMaster.index');
    }

    public function edit($id){

        $bodyStyleMaster = \BodyStyleMaster::find($id);
        return \View::make('admin.bodyStyleMaster.edit',compact('bodyStyleMaster'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \BodyStyleMaster::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $bodyStyleMaster = \BodyStyleMaster::find($id);
        $bodyStyleMaster->update($input);


        return \Redirect::route('admin.bodyStyleMaster.index');
    }


    public function destroy($id){

    }
}