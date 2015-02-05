<?php

class Color extends Eloquent {

    protected $fillable = ['title'];

    public static $rules = [
        'title' => 'required'
    ];

    public function product()
    {
        return $this->hasMany('Product');
    }
}