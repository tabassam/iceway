<?php

class ProductOption extends Eloquent {

    protected $fillable = ['product_id','tcv_option_id'];

    /*public static $rules = [
        'title' => 'required'
    ];
*/
    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function tcv_option()
    {
        return $this->belongsTo('TcvOption');
    }
}