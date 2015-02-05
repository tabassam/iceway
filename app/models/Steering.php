<?php

class Steering extends Eloquent {

    protected $fillable = ['title'];

    public static $rules = [
        'title' => 'required'
    ];

}