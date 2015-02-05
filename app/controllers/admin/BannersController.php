<?php namespace Controllers\admin;

class BannersController extends \BaseController {

    public function __construct(){

    }

    public function index(){
        $banners = \Banner::all();
        return \View::make('admin.banners.index',compact('banners'));
    }

    public function create(){

        return \View::make('admin.banners.create');
    }

    public function show($id){

    }

    public function store(){

        $input = \Input::all();
        $validator= \Validator::make($input, \Banner::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        \Banner::create($input);

        return \Redirect::route('admin.banners.index');
    }

    public function edit($id){

        $banner = \Banner::find($id);
        return \View::make('admin.banners.edit',compact('banner'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Banner::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $banner = \Banner::find($id);
        $banner->update($input);


        return \Redirect::route('admin.banners.index');
    }


    public function destroy($id){

    }

}