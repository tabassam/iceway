@extends('layouts.admin')
@section('title')
    Body Style Master List
    @endsection
@section('page_heading')
    Body Style Master List
    <a href="/admin/bodyStyleMaster/create" class="btn btn-primary" style="float: right">Add Master Body</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Body Style Master
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Model Name</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bodyStyleMasters as $master)
                            <tr class="gradeU">

                                <td>{{ $master->style_name }}</td>

                                <td class="center">
                                    <a href="/admin/bodyStyleMaster/{{$master->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="" class="btn btn-success btn-xs">Show</a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="confirm('Are you sure to delete!')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- DataTables JavaScript -->
    <script src="{{URL::asset('/assets/template/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/assets/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

@endsection
@stop