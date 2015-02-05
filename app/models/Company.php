<?php

class Company extends Eloquent {

    protected $fillable = ['name','flag','logo','profile','order'];

    public static $rules = [
        'name' => 'required',
        'flag' => 'required'
    ];

    public function models()
    {
        return $this->belongsTo('Model');
    }

    public function products()
    {
        return $this->hasMany('Product');
    }
}