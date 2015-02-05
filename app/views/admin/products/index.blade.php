@extends('layouts.admin')
@section('title')
    Products List
@endsection
@section('search_panel')
    @include('admin.products.partials.search_panel')
@endsection
@section('page_heading')
    Products List
    <a href="/admin/products/create" class="btn btn-primary" style="float: right">Add Product</a>

@endsection

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                Products Info
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#on_display" data-toggle="tab" aria-expanded="false">On Display ({{$on_display_products->count()}})</a>
                    </li>
                    <li class=""><a href="#not_on_display" data-toggle="tab" aria-expanded="false">Not On Display ({{$not_on_display_products->count()}})</a>
                    </li>
                    <li class=""><a href="#reserved" data-toggle="tab" aria-expanded="false">Reserved ({{$sold_out_products->count()}})</a>
                    </li>
                    <li class=""><a href="#Sold" data-toggle="tab" aria-expanded="true">Sold Out ({{$reserved_products->count()}})</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="on_display">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example-1">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Stock Id</th>
                                        <th>Product Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($on_display_products as $product)
                                        <tr class="gradeU" id="{{$product->id}}">
                                            <td>
                                                <img src="../../../../products/server/php/files/{{$product->id}}.jpg" width="68px"/>
                                            </td>
                                            <td>{{ $product->stock_no }}</td>
                                            <td><a href=""><u>{{ $product->year_of_make.' '.$product->company->name.''.$product->grade }}</u></a></td>

                                            <td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-{{($product->status=='1')?'success':'warning'}} btn-xs">
                                                    @if($product->status=='1')
                                                        Sold
                                                    @else
                                                        UnSold
                                                    @endif
                                                </a></td>

                                            <td class="center">
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Photos</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Price</a>
                                                <a href="/admin/products/{{$product->id}}" class="btn btn-success btn-xs">View</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                                <a href="" class="btn btn-danger btn-xs" onclick="confirm('Are you sure to delete!')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{--<div id="debug" style="float: right;"><br></div>--}}


                            </div>
                            <!-- /.table-responsive -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="not_on_display">

                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example-2">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Stock Id</th>
                                            <th>Product Name</th>
                                            <th>Status</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($not_on_display_products as $product)
                                            <tr class="gradeU" id="{{$product->id}}">
                                                <td>
                                                    <img src="../../../../products/server/php/files/{{$product->id}}.jpg" width="68px"/>
                                                </td>
                                                <td>{{ $product->stock_no }}</td>
                                                <td><a href=""><u>{{ $product->year_of_make.' '.$product->company->name.''.$product->grade }}</u></a></td>

                                                <td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-{{($product->status=='1')?'success':'warning'}} btn-xs">
                                                        @if($product->status=='1')
                                                            Sold
                                                        @else
                                                            UnSold
                                                        @endif
                                                    </a></td>

                                                <td class="center">
                                                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Photos</a>
                                                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Price</a>
                                                    <a href="/admin/products/{{$product->id}}" class="btn btn-success btn-xs">View</a>
                                                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                                    <a href="" class="btn btn-danger btn-xs" onclick="confirm('Are you sure to delete!')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    {{--<div id="debug" style="float: right;"><br></div>--}}


                                </div>
                                <!-- /.table-responsive -->

                            </div>

                    </div>
                    <div class="tab-pane fade" id="reserved">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example-3">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Stock Id</th>
                                        <th>Product Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reserved_products as $product)
                                        <tr class="gradeU" id="{{$product->id}}">
                                            <td>
                                                <img src="../../../../products/server/php/files/{{$product->id}}.jpg" width="68px"/>
                                            </td>
                                            <td>{{ $product->stock_no }}</td>
                                            <td><a href=""><u>{{ $product->year_of_make.' '.$product->company->name.''.$product->grade }}</u></a></td>

                                            <td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-{{($product->status=='1')?'success':'warning'}} btn-xs">
                                                    @if($product->status=='1')
                                                        Sold
                                                    @else
                                                        UnSold
                                                    @endif
                                                </a></td>

                                            <td class="center">
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Photos</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Price</a>
                                                <a href="/admin/products/{{$product->id}}" class="btn btn-success btn-xs">View</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                                <a href="" class="btn btn-danger btn-xs" onclick="confirm('Are you sure to delete!')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{--<div id="debug" style="float: right;"><br></div>--}}


                            </div>
                            <!-- /.table-responsive -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="Sold">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example-4">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Stock Id</th>
                                        <th>Product Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sold_out_products as $product)
                                        <tr class="gradeU" id="{{$product->id}}">
                                            <td>
                                                <img src="../../../../products/server/php/files/{{$product->id}}.jpg" width="68px"/>
                                            </td>
                                            <td>{{ $product->stock_no }}</td>
                                            <td><a href=""><u>{{ $product->year_of_make.' '.$product->company->name.''.$product->grade }}</u></a></td>

                                            <td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-{{($product->status=='1')?'success':'warning'}} btn-xs">
                                                    @if($product->status=='1')
                                                        Sold
                                                    @else
                                                        UnSold
                                                    @endif
                                                </a></td>

                                            <td class="center">
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Photos</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary btn-xs">Price</a>
                                                <a href="/admin/products/{{$product->id}}" class="btn btn-success btn-xs">View</a>
                                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                                <a href="" class="btn btn-danger btn-xs" onclick="confirm('Are you sure to delete!')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{--<div id="debug" style="float: right;"><br></div>--}}


                            </div>
                            <!-- /.table-responsive -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->


    <!-- /.row -->
    <!-- DataTables JavaScript -->
    <script src="{{URL::asset('/assets/template/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/assets/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/tablednd.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example-1').DataTable({
                responsive: true
            });
            $('#dataTables-example-2').DataTable({
                responsive: true
            });
            $('#dataTables-example-3').DataTable({
                responsive: true
            });
            $('#dataTables-example-4').DataTable({
                responsive: true
            });
        });
    </script>
    <script type="text/javascript">
        var table = document.getElementById('dataTables-example-1');
        var tableDnD = new TableDnD();
        // Redefine the onDrop so that we can display something
        tableDnD.onDrop = function(table, row) {
            var rows = this.table.tBodies[0].rows;
            var debugStr = '';
            for (var i=0; i<rows.length; i++) {
                debugStr += rows[i].id+',';
            }
            //document.getElementById('debug').innerHTML = 'row['+row.id+'] dropped<br>'+debugStr;
            $.ajax({
                data: {id:debugStr},
                url: '/admin/products/order_as',
                method:'GET',
                success: function (result) {
                    console.log(result);
                },
                error: function (){
                    console.log('error');
                }
            });
        }
        tableDnD.init(table);
    </script>

        <script type="text/javascript">
            var table = document.getElementById('dataTables-example-2');
            var tableDnD = new TableDnD();
            // Redefine the onDrop so that we can display something
            tableDnD.onDrop = function(table, row) {
                var rows = this.table.tBodies[0].rows;
                var debugStr = '';
                for (var i=0; i<rows.length; i++) {
                    debugStr += rows[i].id+',';
                }
                //document.getElementById('debug').innerHTML = 'row['+row.id+'] dropped<br>'+debugStr;
                $.ajax({
                    data: {id:debugStr},
                    url: '/admin/products/order_as',
                    method:'GET',
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (){
                        console.log('error');
                    }
                });
            }
            tableDnD.init(table);
        </script>
        <script type="text/javascript">
            var table = document.getElementById('dataTables-example-3');
            var tableDnD = new TableDnD();
            // Redefine the onDrop so that we can display something
            tableDnD.onDrop = function(table, row) {
                var rows = this.table.tBodies[0].rows;
                var debugStr = '';
                for (var i=0; i<rows.length; i++) {
                    debugStr += rows[i].id+',';
                }
                //document.getElementById('debug').innerHTML = 'row['+row.id+'] dropped<br>'+debugStr;
                $.ajax({
                    data: {id:debugStr},
                    url: '/admin/products/order_as',
                    method:'GET',
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (){
                        console.log('error');
                    }
                });
            }
            tableDnD.init(table);
        </script><script type="text/javascript">
            var table = document.getElementById('dataTables-example-4');
            var tableDnD = new TableDnD();
            // Redefine the onDrop so that we can display something
            tableDnD.onDrop = function(table, row) {
                var rows = this.table.tBodies[0].rows;
                var debugStr = '';
                for (var i=0; i<rows.length; i++) {
                    debugStr += rows[i].id+',';
                }
                //document.getElementById('debug').innerHTML = 'row['+row.id+'] dropped<br>'+debugStr;
                $.ajax({
                    data: {id:debugStr},
                    url: '/admin/products/order_as',
                    method:'GET',
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (){
                        console.log('error');
                    }
                });
            }
            tableDnD.init(table);
        </script>


@endsection
@stop