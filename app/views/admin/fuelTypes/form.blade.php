<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Fuel Type Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="form-group">
                                <label>Fuel Type Name</label>
                                {{ Form::text('title',Input::old('title'),['class'=>'form-control']) }}
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