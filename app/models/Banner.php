<?php

class Banner extends Eloquent {

    protected $fillable = ['banner_title','banner_file','status'];

    public static $rules = [
        'banner_title' => 'required'
        ,'banner_file' => 'required'
        ,'status' => 'required'
    ];

}