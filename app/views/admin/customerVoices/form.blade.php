<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Customer Voice Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="form-group">
                                <label>From</label>
                                {{ Form::text('from_name',Input::old('from_name'),['class'=>'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Sent Date</label>
                                {{ Form::text('sent_date',Input::old('sent_date'),['class'=>'form-control','id'=>'datepicker']) }}
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                {{ Form::text('subject',Input::old('subject'),['class'=>'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('country_lbl', 'Country')}}
                                {{ Form::select('country_id', [''=>'---Select Country---']+$countries, Input::old('country_id'),['class' => 'form-control',isset($readonly)?'disabled':'','id'=>'country_id']) }}
                            </div>


                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        @if(isset($customerVoice))
                                            <img src="/customer_images/{{$customerVoice->customerVoiceImage->image_1}}"/>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                            <input type="file" name="image_1">
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        @if(isset($customerVoice))
                                            <img src="/customer_images/{{$customerVoice->customerVoiceImage->image_2}}"/>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image_2"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Flag</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists">

                                        </i> <span class="fileinput-filename">
                                            @if(isset($customerVoice))
                                                <span class="fileinput-filename">{{ $customerVoice->customerVoiceImage->flag_image }}</span>
                                            @endif
                                        </span></div>
                                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="flag_image"></span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
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
                                <label>Comments</label>
                                {{ Form::textarea('customer_comments',Input::old('customer_comments'),['class'=>'form-control']) }}
                            </div>

                            {{Form::submit($submitText, ['class' => 'btn btn-primary'])}}
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
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
        $('#datepicker').datepicker({
            format: 'yyyy-dd-mm'
        }).on('changeDate', function (e) {

            $(this).datepicker('hide');

        });
    });
</script>