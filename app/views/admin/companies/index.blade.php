@extends('layouts.admin')
@section('title')
    Companies List
    @endsection
@section('page_heading')
    Companies List
    <a href="/admin/companies/create" class="btn btn-primary" style="float: right">Add Company</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Companies
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Location</th>
                                <th>Profile</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                            <tr class="gradeU">
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->flag }}</td>
                                <td>{{ $company->profile }}</td>

                                <td class="center">
                                    <a href="/admin/companies/{{$company->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
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