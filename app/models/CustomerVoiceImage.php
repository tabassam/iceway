<?php

class CustomerVoiceImage extends Eloquent {

    protected $fillable = ['image_1','image_2','flag_country','flag_image',];

    public static $rules = [
        'image_1' => 'required',
        'image_2' => 'required',
        'flag_country' => 'required',
        'flag_image' => 'required'
    ];

    public function customerVoice()
    {
        return $this->belongsTo('CustomerVoice');
    }
}