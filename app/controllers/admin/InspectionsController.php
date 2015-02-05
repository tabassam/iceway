<?php namespace Controllers\admin;

class InspectionsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $inspections = \Inspection::all();
        return \View::make('admin.inspections.index',compact('inspections'));
    }

    public function create(){

        return \View::make('admin.inspections.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Inspection::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Inspection::create($input);

        return \Redirect::route('admin.inspections.index');
    }

    public function edit($id){

        $inspection = \Inspection::find($id);
        return \View::make('admin.inspections.edit',compact('inspection'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Inspection::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $inspection = \Inspection::find($id);
        $inspection->update($input);


        return \Redirect::route('admin.inspections.index');
    }


    public function destroy($id){

    }

}