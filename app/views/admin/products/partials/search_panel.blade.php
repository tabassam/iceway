        <div class="panel panel-primary">
            <div class="panel-heading">
                Search
            </div>
            <div class="panel-body">
                <div class="row">
                    {{-- Start First Row--}}
                    <div class="col-sm-2">
                        <label>Free Word</label>
                    </div>
                    <form action="/admin/products" method="GET">
                    <div class="col-lg-8">
                        <div class="form-group input-group">

                            {{Form::text('freeWord',Input::get('freeWord'),['class'=>'form-control'])}}
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" title="Search Free Word" type="submit"><i class="fa fa-search"></i>
                                                </button>
                                            </span>

                        </div>
                    </div>
                    </form>
                    {{--Second Row--}}
                    <form action="/admin/products" method="get">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('company_lbl', 'Make (Company)')}}
                            {{ Form::select('company_id', [''=>'---Select Company---']+$companies, Input::get('company_id'),['class' => 'form-control','id'=>'company_id']) }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('model_lbl', 'Model')}}
                            {{ Form::select('model_id', [], Input::get('model_id'),['class' => 'form-control','id'=>'model']) }}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {{ Form::label('year_of_make_lbl', 'Year')}}
                            {{ Form::select('year_of_make', [''=>'Any']+$years, Input::get('year_of_make'),['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {{ Form::label('month_of_make_lbl', 'Month')}}
                            {{ Form::selectMonth('month_of_make',Input::get('month_of_make'),['class'=>'form-control']) }}
                        </div>
                    </div>
                    {{-- Third Row--}}
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('chassis_no_lbl', 'Chassis No.')}}
                            {{Form::text('chassis_no',Input::get('chassis_no'),['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('reference_no_lbl', 'Reference No')}}
                            {{Form::text('reference_no',Input::get('reference_no'),['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('status', 'Status')}}
                            {{ Form::select('status', array('' => 'Any', '1' => 'Sold', '2' => 'Unsold'), Input::get('company'),['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div id="more">
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('mileage_lbl', 'Mileage')}}
                                {{ Form::select('current_mileage', array('' => 'Any', '50,000' => 'Under 50,000km', '80,000' => 'Under 80,000km', '100,000' => 'Under 100,000km', '150000' => 'Under 150,000km', '200000' => 'Under 200,000km'), Input::get('current_mileage'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('body_style_master_id_lbl', 'Body style')}}
                                {{ Form::select('body_style_master_id', array('' => 'Any', '1' => 'Sold', '2' => 'Unsold'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('order_as', 'Admin/Web')}}
                                {{ Form::select('order_as', array('' => 'Any', '1' => 'Admin', '2' => 'Web'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('displacement_lbl', 'Displacement')}}
                                {{ Form::select('displacement', array('' => 'Any', '1' => '1000cc and Less', '2' => '1000cc and 1500cc', '3' => '1500cc and 1800cc', '4' => '1800cc and 2000cc', '5' => '2000cc and 2500cc', '6' => '2500cc and 4000cc', '7' => '4000cc and Over'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {{ Form::label('min_price_lbl', 'Min Price')}}
                                {{ Form::select('min_price', array('' => 'Any', '1' => '1,000$', '2' => '2,000$', '3' => '5,000$', '4' => '10,000$', '5' => '20,000$'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {{ Form::label('max_price_lbl', 'Max Price')}}
                                {{ Form::select('max_price', array('' => 'Any', '1' => '1,000$', '2' => '2,000$', '3' => '5,000$', '4' => '10,000$', '5' => '20,000$'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('transmission_lbl', 'Transmission')}}
                                {{ Form::select('transmission_id', [''=>'Any']+$transmissions, Input::get('transmission_id'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('drive_type_lbl', 'Drive')}}
                                {{ Form::select('drive_type_id',[''=>'Any']+$driveTypes, Input::get('drive_type_id'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('color_lbl', 'Color')}}
                                {{ Form::select('color_id', [''=>'Any']+$colors, Input::get('color_id'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('status', 'Fuel')}}
                                {{ Form::select('fuel_type_id', [''=>'Any']+$fuelTypes, Input::get('fuel_type_id'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('steering_id_lbl', 'Steering')}}
                                {{ Form::select('steering_id', [''=>'Any']+$steerings, Input::get('steering_id'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('accident', 'Accident')}}
                                {{ Form::select('accident', array('' => 'Any', '1' => 'Accident', '2' => 'Non Accident'), Input::get('company'),['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#" id="hide" >Fewer Options &#9650;</a>
                        </div>
                    </div>
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                        <div class="col-md-3">
                            <a href="#" id="show" >More Options &#9660;</a>
                        </div>
                    </form>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        <script>
            $(document).ready(function(){
                $("#more").hide();
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

            });


                $("#hide").click(function(){
                    $("#more").hide();
                    $("#show").show();
                });

                $("#show").click(function(){
                    $("#more").show();
                    $("#show").hide();

                });

        </script>
