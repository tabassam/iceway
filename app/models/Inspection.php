<?php

class Inspection extends Eloquent {

    protected $fillable = ['inspection_name','inspection_rate'];

    public static $rules = [
        'inspection_name' => 'required',
        'inspection_rate' => 'required'
    ];
}