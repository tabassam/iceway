<?php

class Condition extends Eloquent {

    protected $fillable = ['title'];

    public static $rules = [
        'title' => 'required'
    ];

}