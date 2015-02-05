<?php

class Model extends Eloquent {

    protected $fillable = ['company_id','model_name','model_code'];

    public static $rules = [
        'company_id' => 'required',
        'model_name' => 'required'
    ];

    public function company()
    {
        return $this->belongsTo('Company');
    }
}