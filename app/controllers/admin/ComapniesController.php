<?php namespace Controllers\admin;

class CompaniesController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $companies = \Company::all();
        return \View::make('admin.companies.index',compact('companies'));
    }

    public function create(){

        return \View::make('admin.companies.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Company::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Company::create($input);

        return \Redirect::route('admin.companies.index');
    }

    public function edit($id){

        $company = \Company::find($id);
        return \View::make('admin.companies.edit',compact('company'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Company::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $company = \Company::find($id);
        $company->update($input);


        return \Redirect::route('admin.companies.index');
    }


    public function destroy($id){

    }

}