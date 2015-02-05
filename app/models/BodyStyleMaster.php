<?php

class BodyStyleMaster extends Eloquent {

    protected $fillable = ['style_name','category_image'];
    protected $table = 'body_style_master';

    public static $rules = [
        'style_name' => 'required'
    ];

    public function bodyStyleChild()
    {
        return $this->hasMany('BodyStyleChild');
    }
}