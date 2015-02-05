<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Company Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Company Name</label>
                                {{ Form::text('name',Input::old('name'),['class'=>'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                {{ Form::select('flag', [''=>'Select Location','China'=>'China', 'France'=>'France', 'Germany'=>'Germany', 'Japan'=>'Japan', 'UK'=>'UK', 'USA'=>'USA'], Input::old('flag'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Profile</label>
                                {{ Form::textarea('profile',Input::old('profile'),['class'=>'form-control']) }}
                            </div>

                            {{Form::submit($submitText, ['class' => 'btn btn-primary'])}}
                            <button type="reset" class="btn btn-default">Reset Button</button>
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