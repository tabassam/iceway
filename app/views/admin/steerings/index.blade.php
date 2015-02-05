@extends('layouts.admin')
@section('title')
    Steering List
    @endsection
@section('page_heading')
    Steering List
    <a href="/admin/steerings/create" class="btn btn-primary" style="float: right">Add Steering</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Steering
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($steerings as $steering)
                            <tr class="gradeU">
                                <td>{{ $steering->title }}</td>

                                <td class="center">
                                    <a href="/admin/steerings/{{$steering->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
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