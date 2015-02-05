<?php

class CustomerVoice extends Eloquent {

    protected $fillable = ['from_name',
                            'sent_date',
                            'subject',
                            'country_id',
                            'customer_comments',
                            'company_id',
                            'sent_date',
                            'model_id'
                        ];

    public static $rules = [
                            'from_name' => 'required'
                            ,'sent_date' => 'required'
                            ,'subject' => 'required'
                            ,'country_id' => 'required'
                            ,'customer_comments' => 'required'
                            ,'company_id' => 'required'
                            ,'model_id' => 'required'
                            ,'sent_date' => 'required'
                            ];
    public function customerVoiceImage()
    {
        return $this->hasOne('CustomerVoiceImage');
    }
}