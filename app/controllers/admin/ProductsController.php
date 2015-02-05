<?php namespace Controllers\admin;

class ProductsController extends \BaseController {

    public function __construct(){

    }

    public function index(){

        if(\Input::has('freeWord')){
            $freeWord = \Input::get('freeWord');
            $products =  \Product::where('stock_no', 'LIKE','%'.$freeWord.'%')->orWhere('neworupdated', 'LIKE','%'.$freeWord.'%')
                ->orWhere('title', 'LIKE','%'.$freeWord.'%')->orWhere('reference_no', 'LIKE','%'.$freeWord.'%')
                ->orWhere('chassis_no', 'LIKE','%'.$freeWord.'%')->orWhere('model_code', 'LIKE','%'.$freeWord.'%')
                ->orWhere('product_name', 'LIKE','%'.$freeWord.'%')->orWhere('product_title', 'LIKE','%'.$freeWord.'%')
                ->orWhere('description', 'LIKE','%'.$freeWord.'%')->orWhere('location', 'LIKE','%'.$freeWord.'%')
                ->orWhere('year_of_make', 'LIKE','%'.$freeWord.'%')->orWhere('month_of_make', 'LIKE','%'.$freeWord.'%')
                ->orWhere('displacement', 'LIKE','%'.$freeWord.'%')->orWhere('price', 'LIKE','%'.$freeWord.'%')
                ->orWhere('exterior_color', 'LIKE','%'.$freeWord.'%')->orWhere('interior_color', 'LIKE','%'.$freeWord.'%')
                ->orWhere('expiry_date', 'LIKE','%'.$freeWord.'%')->orWhere('register_date', 'LIKE','%'.$freeWord.'%')
                ->orWhere('buyer_name', 'LIKE','%'.$freeWord.'%')->orWhere('buyer_email', 'LIKE','%'.$freeWord.'%')
                ->orWhere('buyer_phone', 'LIKE','%'.$freeWord.'%')->orWhere('stock_no', 'LIKE','%'.$freeWord.'%')
                ->get();
        }elseif(\Input::has('company_id') || \Input::has('year_of_make')|| \Input::has('month_of_make')
            ||\Input::has('chassis_no') || \Input::has('reference_no')|| \Input::has('status')
            ||\Input::has('mileage') || \Input::has('body_style_master_id')|| \Input::has('order_as')
            ||\Input::has('displacement') || \Input::has('min_price')|| \Input::has('max_price')
            ||\Input::has('transmission_id') || \Input::has('drive_type_id')|| \Input::has('color_id')
            ||\Input::has('fuel_type_id') || \Input::has('steering_id')|| \Input::has('accident'))
        {

            $result =  \Product::OrWhere('company_id','=',\Input::get('company_id'))
                ->OrWhere('year_of_make','=',\Input::get('year_of_make'))
                ->OrWhere('month_of_make','=',\Input::get('month_of_make'))
                ->OrWhere('chassis_no','=',\Input::get('chassis_no'))
                ->OrWhere('reference_no','=',\Input::get('reference_no'))
                ->OrWhere('status','=',\Input::get('status'))
                ->OrWhere('current_mileage','=',\Input::get('current_mileage'))
                ->OrWhere('body_style_master_id','=',\Input::get('body_style_master_id'))
                ->OrWhere('order_as','=',\Input::get('order_as'))
                ->OrWhere('displacement','=',\Input::get('displacement'))
                ->OrWhere('price','=',\Input::get('min_price'))
                ->OrWhere('price','=',\Input::get('max_price'))
                ->OrWhere('transmission_id','=',\Input::get('transmission_id'))
                ->OrWhere('drive_type_id','=',\Input::get('drive_type_id'))
                ->OrWhere('exterior_color','=',\Input::get('color_id'))
                ->OrWhere('interior_color','=',\Input::get('color_id'))
                ->OrWhere('fuel_type_id','=',\Input::get('fuel_type_id'))
                ->OrWhere('steering_id','=',\Input::get('steering_id'))
                ->OrWhere('accident','=',\Input::get('accident'));


            $products =  $result->get();

            /*$result = \DB::getQueryLog();
            return $res = end($result);*/

        }else{
            //$products =  \Product::orderBy('order_as')->get();//Handles Drag and drop feature
            $on_display_products =  \Product::orderBy('order_as')->whereSold('0')->get();//Handles Drag and drop feature
            $not_on_display_products =  \Product::orderBy('order_as')->whereSold('2')->get();//Handles Drag and drop feature
            $sold_out_products =  \Product::orderBy('order_as')->whereSold('1')->get();//Handles Drag and drop feature
            $reserved_products =  \Product::orderBy('order_as')->whereSold('3')->get();//Handles Drag and drop feature
        }


        //$products =  \Product::all();
        $companies = \Company::lists('name','id');
        $colors = \Color::lists('title','id');
        $fuelTypes = \FuelType::lists('title','id');
        $steerings = \Steering::lists('title','id');
        $transmissions = \Transmission::lists('title','id');
        $driveTypes = \DriveType::lists('title','id');

        for ($y = date('Y'); $y > 1960; $y--) {
            $years[$y] = $y;
        }
        return \View::make('admin.products.index',compact('reserved_products','sold_out_products','not_on_display_products','on_display_products','products','companies','years','colors','fuelTypes','steerings','transmissions','driveTypes'));
    }

    public function create(){

        $reference_no =   \Product::orderby('stock_no', 'desc')->pluck('stock_no');
        if(!empty($reference_no)){

            $reference_no ='NBC'. (1 + explode('NBC',\Product::orderby('stock_no', 'desc')->pluck('stock_no'))['1']);
        }else{
            $reference_no = 'NBC1';
        }
        $safety =  \TcvOption::take(5)->get();
        $windows =  \TcvOption::skip(5)->take(4)->get();
        $comforts =  \TcvOption::skip(9)->take(8)->get();
        $sounds =  \TcvOption::skip(17)->take(8)->get();
        $seats =  \TcvOption::skip(25)->take(4)->get();
        $other_features =  \TcvOption::skip(29)->take(6)->get();
        $other_selling =  \TcvOption::skip(35)->take(10)->get();
        $comment_keywords =  \CommentKeyword::lists('title','id');
        $companies = \Company::lists('name','id');
        $body_style_master = \BodyStyleMaster::lists('style_name','id');
        $fuelTypes = \FuelType::lists('title','id');
        $colors = \Color::lists('title','id');
        $steerings = \Steering::lists('title','id');
        $transmissions = \Transmission::lists('title','id');
        $driveTypes = \DriveType::lists('title','id');
        $conditions = \Condition::lists('title','id');

        $selected = [];
        for ($y = date('Y'); $y > 1960; $y--) {
            $years[$y] = $y;
        }

        return \View::make('admin.products.create',compact('safety','windows','comforts','sounds',
            'seats','other_features','other_selling','comment_keywords','years','companies','body_style_master',
            'fuelTypes','colors','selected','reference_no','steerings','transmissions','driveTypes','conditions'));
    }

    public function show($id){

        $safety =  \TcvOption::take(5)->get();
        $windows =  \TcvOption::skip(5)->take(4)->get();
        $comforts =  \TcvOption::skip(9)->take(8)->get();
        $sounds =  \TcvOption::skip(17)->take(8)->get();
        $seats =  \TcvOption::skip(25)->take(4)->get();
        $other_features =  \TcvOption::skip(29)->take(6)->get();
        $other_selling =  \TcvOption::skip(35)->take(10)->get();
        $comment_keywords =  \CommentKeyword::lists('title','id');
        $companies = \Company::lists('name','id');
        $body_style_master = \BodyStyleMaster::lists('style_name','id');
        $fuelTypes = \FuelType::lists('title','id');
        $colors = \Color::lists('title','id');
        $steerings = \Steering::lists('title','id');
        $transmissions = \Transmission::lists('title','id');
        $driveTypes = \DriveType::lists('title','id');
        $conditions = \Condition::lists('title','id');
        $readonly = 'readonly';
        $selected = [];

        for ($y = date('Y'); $y > 1960; $y--) {
            $years[$y] = $y;
        }

        $product = \Product::whereId($id)->with('productOption')->first();


        foreach($product->product_option as $val){
            $selected[] = $val['tcv_option_id'];
        }

        return \View::make('admin.products.show',compact('product','safety','windows','comforts','sounds',
            'seats','other_features','other_selling','comment_keywords','years','companies','body_style_master',
            'fuelTypes','colors','selected','steerings','transmissions','driveTypes','conditions','readonly'));
    }

    public function store(){

        $input = \Input::all();

        $validator= \Validator::make($input, \Product::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $input['stock_no'] = $input['reference_no'];//Stock number is equal to Reference number
        $product = \Product::create($input);

        //Saving Options
        foreach($input['options'] as $option){
            \ProductOption::create(['product_id'=>$product->id,'tcv_option_id'=>$option]);
        }


        return \Redirect::route('admin.products.index');
    }

    public function edit($id){

        $safety =  \TcvOption::take(5)->get();
        $windows =  \TcvOption::skip(5)->take(4)->get();
        $comforts =  \TcvOption::skip(9)->take(8)->get();
        $sounds =  \TcvOption::skip(17)->take(8)->get();
        $seats =  \TcvOption::skip(25)->take(4)->get();
        $other_features =  \TcvOption::skip(29)->take(6)->get();
        $other_selling =  \TcvOption::skip(35)->take(10)->get();
        $comment_keywords =  \CommentKeyword::lists('title','id');
        $companies = \Company::lists('name','id');
        $body_style_master = \BodyStyleMaster::lists('style_name','id');
        $fuelTypes = \FuelType::lists('title','id');
        $colors = \Color::lists('title','id');
        $steerings = \Steering::lists('title','id');
        $transmissions = \Transmission::lists('title','id');
        $driveTypes = \DriveType::lists('title','id');
        $conditions = \Condition::lists('title','id');

        $selected = [];

        for ($y = date('Y'); $y > 1960; $y--) {
            $years[$y] = $y;
        }

        $product = \Product::whereId($id)->with('productOption')->first();


            foreach($product->product_option as $val){
                $selected[] = $val['tcv_option_id'];
            }

        return \View::make('admin.products.edit',compact('product','safety','windows','comforts','sounds',
            'seats','other_features','other_selling','comment_keywords','years','companies','body_style_master',
            'fuelTypes','colors','selected','steerings','transmissions','driveTypes','conditions'));
    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \Product::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $model = \Product::find($id);
        $model->update($input);

        //Update Options

        foreach(\ProductOption::whereProductId($id)->get() as $value){
            $option_id = $value['id'];
            \ProductOption::find($option_id)->delete();
        }

        if(isset($input['options'])){
            foreach($input['options'] as $option){

                \ProductOption::create(['product_id'=>$id,'tcv_option_id'=>$option]);
            }
        }


        return \Redirect::route('admin.products.index');
    }


    public function destroy($id){

    }


    /**
     * Ajax Request
     */
    public function check_reference_no(){

        return $status =  \Product::whereReferenceNo(\Input::get('reference_no'))->first();

    }

    public function order_as(){
        return $order_sequence =  \Input::all();
        $order =  (array)$order_sequence;

        /*$n = 1;
        foreach($order_sequence as $order){

            $var[] = $order;

            $product = \Product::find($n);
            $product->update(array('order_as' => $order));
            $n++;
        }*/
        return $var;

    }
}