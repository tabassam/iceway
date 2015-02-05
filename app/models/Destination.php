<?php

class Destination extends Eloquent {

    protected $fillable = ['country_id','port_name','rate_per_m3'];

    public static $rules = [
        'country_id' => 'required',
        'port_name' => 'required'
    ];

    public function country()
    {
        return $this->belongsTo('Country');
    }
}