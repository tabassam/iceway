<?php namespace Controllers\admin;

class CustomerVoicesController extends \BaseController {

    public function __construct(){

        $destinationPath = 'public/'.\Config::get('settings.image.upload.path');
        $this->destinationPath = $destinationPath;
        $countries = \Countries::lists('name','id');
        $companies = \Company::lists('name','id');
        $this->countries = $countries;
        $this->companies = $companies;
    }

    public function index(){
        $customerVoices = \CustomerVoice::all();
        return \View::make('admin.customerVoices.index',compact('customerVoices'));
    }

    public function create(){

        $countries =  $this->countries;
        $companies = $this->companies;
        return \View::make('admin.customerVoices.create',compact('countries','companies'));
    }

    public function show($id){

    }

    public function store(){


        $input = \Input::all();

        $validator= \Validator::make($input, \CustomerVoice::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $customerVoice = \CustomerVoice::create($input);

        if(\Input::hasFile('image_1')){
            $image_1 = $input['image_1'];
            $image_1 = $this->upload($image_1,$this->destinationPath);
        }else{
            $image_1 = 'no_image.gif';
        }
        if(\Input::hasFile('image_2')){
            $image_2 = $input['image_2'];
            $image_2 = $this->upload($image_2,$this->destinationPath);
        }else{
            $image_2 = 'no_image.gif';
        }

        if(\Input::hasFile('flag_image')){
            $flag_image = $input['flag_image'];
            $flag_image = $this->upload($flag_image,$this->destinationPath);
        }else{
            $flag_image = 'no_image.gif';
        }

        $customerVoice->customerVoiceImage()->save(new \CustomerVoiceImage(['image_1'=>$image_1,'image_2'=>$image_2,'flag_image'=>$flag_image,'customer_voice_id'=>$customerVoice->id]));

        return \Redirect::route('admin.customerVoices.index');
    }

    public function edit($id){

        $countries =  $this->countries;
        $companies = $this->companies;
        $customerVoice = \CustomerVoice::find($id);
        return \View::make('admin.customerVoices.edit',compact('customerVoice','countries','companies'));

    }

    public function update($id){

        $input = \Input::all();
        $validator= \Validator::make($input, \CustomerVoice::$rules);

        if($validator->fails())
            return \Redirect::back()->withErrors($validator)->withInput();

        $customerVoice = \CustomerVoice::find($id);
        $customerVoice->update($input);

        $customerVoiceImage = \CustomerVoiceImage::whereCustomerVoiceId($id);

        $path = public_path().'/customer_images/';
        if(\Input::hasFile('image_1')){

            $old_image_1 = $customerVoiceImage->pluck('image_1');
            $image_1 = $input['image_1'];
            $image_1 = $this->upload($image_1,$this->destinationPath);
            $customerVoiceImage->update(['image_1'=>$image_1]);

            //Delete physical file
            $this->deletePhysicalFile($path,$old_image_1);

        }
        if(\Input::hasFile('image_2')){
            $old_image_2 = $customerVoiceImage->pluck('image_2');
            $image_2 = $input['image_2'];
            $image_2 = $this->upload($image_2,$this->destinationPath);
            $customerVoiceImage->update(['image_1'=>$image_2]);

            //Delete physical file
            $this->deletePhysicalFile($path,$old_image_2);
        }

        if(\Input::hasFile('flag_image')){
            $old_flag_image = $customerVoiceImage->pluck('flag_image');
            $flag_image = $input['flag_image'];
            $flag_image = $this->upload($flag_image,$this->destinationPath);
            $customerVoiceImage->update(['image_1'=>$flag_image]);

            //Delete physical file
            $this->deletePhysicalFile($path,$old_flag_image);
        }

        return \Redirect::route('admin.customerVoices.index');
    }

    public function destroy($id){

    }

}