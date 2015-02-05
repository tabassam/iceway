@extends('layouts.admin')
@section('title')
    Destinations List
    @endsection
@section('page_heading')
    Destinations List
    <a href="/admin/destinations/create" class="btn btn-primary" style="float: right">Add Destination</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Destinations
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Country</th>
                                <th>Port</th>
                                <th>Rate per m3</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($destinations as $destination)
                            <tr class="gradeU">
                                <td>{{ $destination->country->name }}</td>
                                <td>{{ $destination->port_name }}</td>
                                <td>{{ $destination->rate_per_m3 }}</td>

                                <td class="center">
                                    <a href="/admin/destinations/{{$destination->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
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