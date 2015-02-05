<?php

class TcvOption extends Eloquent {

    protected $fillable = ['value'];

    public function productOption()
    {
        return $this->hasMany('ProductOption');
    }
}