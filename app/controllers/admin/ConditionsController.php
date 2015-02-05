<?php namespace Controllers\admin;

class ConditionsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $conditions = \Condition::all();
        return \View::make('admin.conditions.index',compact('conditions'));
    }

    public function create(){

        return \View::make('admin.conditions.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Condition::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Condition::create($input);

        return \Redirect::route('admin.conditions.index');
    }

    public function edit($id){

        $condition = \Condition::find($id);
        return \View::make('admin.conditions.edit',compact('condition'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Condition::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $condition = \Condition::find($id);
        $condition->update($input);


        return \Redirect::route('admin.conditions.index');
    }


    public function destroy($id){

    }

}