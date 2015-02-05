<?php namespace Controllers\admin;

class UsersController extends \BaseController {

    public function __construct(){


    }

    protected $layout = 'layouts.admin';

    public function login(){
        return \View::make('admin.login');
    }

    public function do_login(){

        $user = \Auth::attempt([
            'username' => \Input::get('username'),
            'password' => \Input::get('password')
        ]);

        if($user)
        {
                return \Redirect::to('admin');
        }
        return \Redirect::back()->with('error','Invalid Username or password')->withInput();
    }

    public function logout()
    {
        \Auth::logout();
        return \Redirect::to('/admin');

    }


}