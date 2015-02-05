<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Destination Info
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="form-group">
                                <label>Country</label>
                                {{ Form::select('country_id', [''=>'---Select Country---']+$countries, Input::old('country_id'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                {{ Form::text('port_name',Input::old('title'),['class'=>'form-control']) }}
                            </div>

                                <div class="form-group">
                                    <label>Freight type</label>
                                </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {{ Form::radio('freight_type',Input::old('freight_type'),true, ['id'=>'m3_rate']) }}
                                    <label>Per m3 Rate</label>
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::radio('freight_type',Input::old('freight_type'),'',['id'=>'unit_rate']) }}
                                <label>Per unit rate</label>
                            </div>
                            <div id="less">
                                <div class="form-group">
                                    <label>Rate per m3</label>
                                    {{ Form::text('rate_per_m3',Input::old('rate_per_m3'),['class'=>'form-control']) }}
                                </div>
                            </div>
                            <div id="more">
                                    <div class="col-md-7">
                                    <div class="form-group">
                                        <table class="table-hover">
                                            <th>
                                                m3 upto
                                            </th>
                                            <th>
                                                unit rate- US$
                                            </th>
                                                <tbody>

                                                @for($i=0;$i<6;$i++)
                                                <tr>
                                                    <td>{{ Form::text('m3','',['class'=>'form-control']) }}</td>
                                                    <td>{{ Form::text('rate','',['class'=>'form-control']) }}</td>
                                                </tr>
                                                @endfor

                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                            </div>
                            <div class="col-md-12">
                            {{Form::submit($submitText, ['class' => 'btn btn-primary'])}}
                            <button type="reset" class="btn btn-default">Reset</button>
                                </div>
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
        $("#more").hide();
        $("#less").show();
    });

    $("#m3_rate").click(function(){
        $("#more").hide();
        $("#less").show();
    });

    $("#unit_rate").click(function(){
        $("#more").show();
        $("#less").hide();

    });

</script>