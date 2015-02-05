<?php namespace Controllers\admin;

class DashboardController extends \BaseController {

    public function __construct(){


    }

    public function index(){
        return \View::make('admin.dashboard');
    }
}