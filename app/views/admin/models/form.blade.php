<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Model Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Company</label>
                                {{ Form::select('company_id', [''=>'Select Company']+$company, Input::old('company_id'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Model Name</label>
                                {{ Form::text('model_name',Input::old('model_name'),['class'=>'form-control']) }}
                            </div>

                            <div class="form-group">
                                <label>Model Code</label>
                                {{ Form::text('model_code',Input::old('model_code'),['class'=>'form-control']) }}
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