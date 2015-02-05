<?php

class Transmission extends Eloquent {

    protected $fillable = ['title'];

    public static $rules = [
        'title' => 'required'
    ];

}