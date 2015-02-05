<?php namespace Controllers\admin;

class ModelsController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $models = \Model::all();
        return \View::make('admin.models.index',compact('models'));
    }

    public function create(){

        $company =  \Company::lists('name','id');
        return \View::make('admin.models.create',compact('company'));
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Model::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Model::create($input);

        return \Redirect::route('admin.models.index');
    }

    public function edit($id){

        $company =  \Company::lists('name','id');
        $model = \Model::find($id);
        return \View::make('admin.models.edit',compact('model','company'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Model::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $model = \Model::find($id);
        $model->update($input);


        return \Redirect::route('admin.models.index');
    }


    public function destroy($id){

    }


    /*
     * Ajax Request
     */
    public function all(){

        $id = \Input::get('id');
        return \Model::whereCompanyId($id)->get();
    }
}