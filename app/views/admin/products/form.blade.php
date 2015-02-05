<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Car Details
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">


                            <div class="form-group">
                                {{ Form::label('title_lbl', 'Title')}}
                                {{Form::text('title',Input::old('title'),['class'=>'form-control','placeholder'=>'Enter Title',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                <div id="reference_msg" style="color: red"></div>
                                {{ Form::label('reference_no_lbl', 'Reference Number')}}
                                {{Form::text('reference_no',isset($reference_no)?$reference_no:Input::old('reference_no'),['class'=>'form-control','id'=>'reference_no',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('pay_trade_lbl', 'Pay Trade')}}
                                {{ Form::select('pay_trade', array('1' => 'Yes', '0' => 'No'), Input::old('pay_trade'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                            </div>
                            <div class="form-group">

                                {{ Form::label('year_of_make_lbl', 'Year')}}
                                {{ Form::select('year_of_make', [''=>'---Select Year---']+$years, Input::old('year_of_make'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}

                            </div>
                            <div class="form-group">

                                {{ Form::label('month_of_make_lbl', 'Month')}}
                                {{ Form::selectMonth('month_of_make',Input::old('month_of_make'),['class'=>'form-control',isset($readonly)?'disabled':'']) }}

                            </div>
                            <div class="form-group">

                                {{ Form::label('company_lbl', 'Make (Company)')}}
                                {{ Form::select('company_id', ['---Select Company---']+$companies, Input::old('company_id'),['class' => 'form-control',isset($readonly)?'disabled':'','id'=>'company_id']) }}
                            </div>
                            <div class="form-group">

                                {{ Form::label('model_lbl', 'Model')}}
                                {{ Form::select('model_id', [], Input::old('model_id'),['class' => 'form-control',isset($readonly)?'disabled':'','id'=>'model']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('grade_lbl', 'Grade')}}
                                {{Form::text('grade',Input::old('grade'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('chassis_no_lbl', 'Chassis No')}}
                                {{Form::text('chassis_no',Input::old('chassis_no'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('model_code_lbl', 'Model Code')}}
                                {{Form::text('model_code',Input::old('model_code'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('length_lbl', 'Length')}}
                                {{Form::text('length',Input::old('length'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('width_lbl', 'Width')}}
                                {{Form::text('width',Input::old('width'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('height_lbl', 'Height')}}
                                {{Form::text('height',Input::old('height'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('weight_lbl', 'Weight')}}
                                {{Form::text('weight',Input::old('weight'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('m3_value_lbl', 'M3 Value')}}
                                {{Form::text('m3_value',Input::old('m3_value'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('mileage_lbl', 'Mileage')}}
                                {{Form::text('current_mileage',Input::old('current_mileage'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {{ Form::label('body_style_master_id', 'Body Style')}}
                                        {{ Form::select('body_style_master_id', [''=>'--Select Body Style--']+$body_style_master, Input::old('company_id'),['class' => 'form-control',isset($readonly)?'disabled':'','id'=>'body_style_master']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('body_style_child_id_lbl', 'Body Style Child')}}
                                        {{ Form::select('body_style_child_id', [], Input::old('body_style_child_id'),['class' => 'form-control',isset($readonly)?'disabled':'','id'=>'body_style_child']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('steering_lbl', 'Steering')}}
                                {{ Form::select('steering_id', [''=>'---Select Steering---']+$steerings, Input::old('steering_id'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('transmission_lbl', 'Transmission')}}
                                {{ Form::select('transmission_id', [''=>'---Select Transmission---']+$transmissions, Input::old('transmission_id'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('doors_lbl', 'Doors')}}
                                {{ Form::select('doors', [''=>'---Select Door---','1' => '1', '2' => '2', '3' => '3', '4' => '4'], Input::old('doors'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('displacement_lbl', 'Displacement')}}
                                {{Form::text('displacement',Input::old('displacement'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                            </div>



                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            {{ Form::label('seating_capacity_lbl', 'Seating Capacity')}}
                            {{Form::text('seating_capacity',Input::old('seating_capacity'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('fuel_type_lbl', 'Fuel Type')}}
                            {{ Form::select('fuel_type_id', [''=>'---Select Fuel Type---']+$fuelTypes, Input::old('fuel_type_id'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('drive_type_lbl', 'Drive Type')}}
                            {{ Form::select('drive_type_id', [''=>'---Select Drive Type---']+$driveTypes, Input::old('drive_type_id'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('exterior_color_lbl', 'Exterior Color')}}
                            {{ Form::select('exterior_color', [''=>'---Select Exterior Color---']+$colors, Input::old('exterior_color'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('interior_color_lbl', 'Interior Color')}}
                            {{ Form::select('interior_color', [''=>'---Select Interior Color---']+$colors, Input::old('interior_color'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('condition_lbl', 'Condition')}}
                            {{ Form::select('condition', ['' => '---Select Condition---']+$conditions, Input::old('condition'),['class' => 'form-control',isset($readonly)?'disabled':'']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('price_lbl', 'Price')}}
                            {{Form::text('price',Input::old('price'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('auction_point_lbl', 'Auction Point')}}
                            {{Form::text('auction_point',Input::old('auction_point'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('burden_lbl', 'Burden')}}
                            {{Form::text('burden',Input::old('burden'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('engine_type_lbl', 'Engine Type')}}
                            {{Form::text('engine_type',Input::old('engine_type'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('engine_number_lbl', 'Engine No.')}}
                            {{Form::text('engine_number',Input::old('engine_number'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('seat_belt_lbl', 'Seat Belt')}}
                            {{Form::text('seat_belt',Input::old('seat_belt'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('spare_key_lbl', 'Spare Keys')}}
                            {{Form::text('spare_key',Input::old('spare_key'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('other_options_lbl', 'Other Options')}}
                            {{Form::text('other_options',Input::old('other_options'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('mechanical_problem_lbl', 'Mechanical Problem')}}
                            {{Form::text('mechanical_problem',Input::old('mechanical_problem'),['class'=>'form-control',isset($readonly)?$readonly:''])}}
                        </div>


                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <!-- /.row (nested) -->
            </div>
            <hr>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">

                            <label>Safety</label>
                        {{-- $product->product_option --}}

                        @foreach($safety as $safe)
                            <div class="checkbox">
                                <label>
                                {{ Form::checkbox('options[]',$safe->id,in_array($safe->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $safe->value }}
                                </label>
                            </div>

                        @endforeach
                            <label>Comfort</label>
                        @foreach($comforts as $comfort)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $comfort->id,in_array($comfort->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $comfort->value }}
                                </label>
                            </div>
                            @endforeach
                        <label>Seat</label>
                        @foreach($seats as $seat)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $seat->id,in_array($seat->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $seat->value }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">

                        <label>Windows</label>
                        @foreach($windows as $window)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $window->id,in_array($window->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $window->value }}
                                </label>
                            </div>
                        @endforeach

                        <label>Sound System</label>
                        @foreach($sounds as $sound)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $sound->id,in_array($sound->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $sound->value }}
                                </label>
                            </div>
                        @endforeach

                    </div>
                    <div class="col-md-4">

                        <label>Other Features</label>
                        @foreach($other_features as $feature)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $feature->id,in_array($feature->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $feature->value }}
                                </label>
                            </div>
                        @endforeach
                        <label>Other selling points</label>
                        @foreach($other_selling as $selling)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('options[]', $selling->id,in_array($selling->id,$selected),[isset($readonly)?'disabled':'']) }}
                                    {{ $selling->value }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    </div>
                </div>
            <hr>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            In this space, please add any other information about the
                            vehicle which would help the customer make his decision for this car.
                            You can type your comments directly in the space below or add ready-made selling / catch phrases from the list on the right.
                            Select one phrase and click on the "Add" button or hold down the Ctrl key on your keyboard while selecting several phrases,
                            then click on the "Add" button.
                        </p>
                        @include('admin.products.partials.swap_box')
                    </div>
                </div>
            </div>
            </div>
        <div class="form-group" style="padding-left: 25em">
            @if(isset($readonly))
                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
            @else
            {{Form::submit($submitText, ['class' => 'btn btn-primary'])}}
            @endif
            <button type="reset" class="btn btn-default">Reset</button>
            </div>

            <hr>

        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<script>
    $(document).ready(function(){
        $("#company_id").change(function(){
            var company_id = $("#company_id").val();
            $('#model').empty();
            $.ajax({
                data: {id:company_id},
                url: '/admin/models/all',
                method:'GET',
                success: function (result) {
                    $.each(result, function(index, element) {
                        $('#model').append("<option>"+element.model_name+"</option>");
                    });
                },
                error: function (){
                    console.log('error');
                }
            });

        });

        $("#body_style_master").change(function(){
            var body_style_master_id = $("#body_style_master").val();

            $('#body_style_child').empty();
            $.ajax({
                data: {id:body_style_master_id},
                url: '/admin/bodyStyleChildren/all',
                method:'GET',
                success: function (result) {
                    $.each(result, function(index, element) {
                        $('#body_style_child').append("<option>"+element.name+"</option>");
                    });
                },
                error: function (){
                    console.log('error');
                }
            });

        });

        $("#reference_no").focusout(function(){
            //console.log('me ');
            var reference_no = $("#reference_no").val();

            $.ajax({
                data: {reference_no:reference_no},
                url: '/admin/check_reference_no',
                method:'GET',
                success: function (result) {
                    if(result){
                        $("#reference_no").focus();
                        $("#reference_msg").html('Provided Reference Number Is Already Taken');

                    }
                },
                error: function (){
                    console.log('error');
                }
            });

        });
    });
</script>