<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Inspection Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="form-group">
                                <label>Inspection Name</label>
                                {{ Form::text('inspection_name',Input::old('inspection_name'),['class'=>'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Inspection Rate</label>
                                {{ Form::text('inspection_rate',Input::old('inspection_rate'),['class'=>'form-control']) }}
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