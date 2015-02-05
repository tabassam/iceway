<?php namespace Controllers\admin;

class ColorsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $colors = \Color::all();
        return \View::make('admin.colors.index',compact('colors'));
    }

    public function create(){

        return \View::make('admin.colors.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Color::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Color::create($input);

        return \Redirect::route('admin.colors.index');
    }

    public function edit($id){

        $color = \Color::find($id);
        return \View::make('admin.colors.edit',compact('color'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Color::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $model = \Color::find($id);
        $model->update($input);


        return \Redirect::route('admin.colors.index');
    }


    public function destroy($id){

    }

}