<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Body Style Children Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Body Master</label>
                                {{ Form::select('body_style_master_id', [''=>'---Select Body Master---']+$bodyStyleMaster, Input::old('body_style_master_id'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Child Name</label>
                                {{ Form::text('name',Input::old('name'),['class'=>'form-control']) }}
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