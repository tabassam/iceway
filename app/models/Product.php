<?php

class Product extends Eloquent
{

    protected $fillable = [
        'stock_no'
        , 'neworupdated'
        , 'title'
        , 'reference_no'
        , 'chassis_no'
        , 'model_code'
        , 'tcv_img_url'
        , 'tcv_id'
        , 'product_name'
        , 'product_title'
        , 'description'
        , 'location'
        , 'year_of_make'
        , 'month_of_make'
        , 'model_id'
        , 'model_id2'
        , 'odometer'
        , 'displacement'
        , 'steering_id'
        , 'transmission_id'
        , 'doors'
        , 'seating_capacity'
        , 'fuel_type_id'
        , 'drive_type_id'
        , 'price'
        , 'custom_price'
        , 'use_custom_price'
        , 'tcv_price'
        , 'currency'
        , 'exterior_color'
        , 'interior_color'
        , 'weight'
        , 'length'
        , 'width'
        , 'height'
        , 'burden'
        , 'condition'
        , 'air_conditioning'
        , 'auction_point'
        , 'seat_belt'
        , 'engine_type'
        , 'spare_key'
        , 'other_options'
        , 'other_comments'
        , 'special_offer'
        , 'added_by'
        , 'updated_by'
        , 'expiry_date'
        , 'register_date'
        , 'grade'
        , 'sold'
        , 'estimator_sold'
        , 'estimator_sold_date'
        , 'deleted'
        , 'product_order'
        , 'sale_price'
        , 'price_type'
        , 'm3_value'
        , 'body_style_master_id'
        , 'body_style_child_id'
        , 'mechanical_problem'
        , 'buyer_name'
        , 'buyer_email'
        , 'buyer_phone'
        , 'buyer_address'
        , 'consignee_name'
        , 'consignee_phone'
        , 'consignee_email'
        , 'consignee_address'
        , 'first_payment'
        , 'first_payment_date'
        , 'second_payment'
        , 'second_payment_date'
        , 'third_payment'
        , 'third_payment_date'
        , 'inspection_id'
        , 'destination_id'
        , 'invoice_file'
        , 'custom_clearing_file'
        , 'b_l_copy_file'
        , 'original_doc_file'
        , 'comments'
        , 'date_sold'
        , 'who_sold'
        , 'bought_from'
        , 'buying_date'
        , 'buying_price'
        , 'current_mileage'
        , 'mileage_on_paper'
        , 'engine_number'
        , 'veh_location'
        , 'registration_month'
        , 'veh_grade'
        , 'last_values'
        , 'tcv_update'
        , 'pay_trade'
        , 'site'
        , 'hidden_comments'
        , 'company_id'
        , 'order_as'
    ];
//mileage
    public static $rules = [
        'reference_no' => 'required',
        'chassis_no' => 'required',
        'model_code' => 'required',
        'year_of_make' => 'required',
        'month_of_make' => 'required',
        'displacement' => 'required',
        'steering_id' => 'required',
        'transmission_id' => 'required',
        'doors' => 'required',
        'seating_capacity' => 'required',
        'fuel_type_id' => 'required',
        'drive_type_id' => 'required',
        'price' => 'required',
        'condition' => 'required',
        'grade' => 'required'
        ];

    public function company()
    {
        return $this->belongsTo('Company');
    }

    public function productOption()
    {
        return $this->hasMany('ProductOption');
    }
}