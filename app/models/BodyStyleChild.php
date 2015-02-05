<?php

class BodyStyleChild extends Eloquent {

    protected $fillable = ['name','body_style_master_id'];

    public static $rules = [
        'name' => 'required',
        'body_style_master_id' => 'required'
    ];

    public function bodyStyleMaster()
    {
        return $this->belongsTo('BodyStyleMaster');
    }
}