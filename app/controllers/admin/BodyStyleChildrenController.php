<?php namespace Controllers\admin;

class BodyStyleChildrenController extends \BaseController {

    public function __construct(){

    }

    public function index(){

        $bodyStyleChildren = \BodyStyleChild::all();
        return \View::make('admin.bodyStyleChildren.index',compact('bodyStyleChildren'));
    }

    public function create(){

        $bodyStyleMaster =  \BodyStyleMaster::lists('style_name','id');
        return \View::make('admin.bodyStyleChildren.create',compact('bodyStyleMaster'));
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \BodyStyleChild::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \BodyStyleChild::create($input);

        return \Redirect::route('admin.bodyStyleChildren.index');
    }

    public function edit($id){

        $bodyStyleMaster =  \BodyStyleMaster::lists('style_name','id');
        $bodyStyleChildren = \BodyStyleChild::find($id);
        return \View::make('admin.bodyStyleChildren.edit',compact('bodyStyleChildren','bodyStyleMaster'));
    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \BodyStyleChild::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $bodyStyleMaster = \BodyStyleChild::find($id);
        $bodyStyleMaster->update($input);


        return \Redirect::route('admin.bodyStyleChildren.index');
    }


    public function destroy($id){

    }

    /*
     * Ajax Request
     */
    public function all(){

        $id = \Input::get('id');
        return \BodyStyleChild::whereBodyStyleMasterId($id)->get();
    }
}