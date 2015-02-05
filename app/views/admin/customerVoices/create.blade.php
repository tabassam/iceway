@extends('layouts.admin')
@section('title')
    Add Customer Voice
@endsection
@section('page_heading')
    New Customer Voice
@endsection

@section('content')
    <!-- bootstrap-datepicker -->
    <link href="{{URL::asset('/assets/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/assets/jasny-bootstrap/css/jasny-bootstrap.css.map')}}"  type="text/css">
    <link href="{{URL::asset('/assets/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.customerVoices.store','files'=>true)) }}
        @include('admin.customerVoices.form', ['submitText' => 'Save'])
    {{ Form::close() }}
    <!-- Date Picker JavaScript -->
    <script src="{{URL::asset('/assets/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>
    <script src="{{URL::asset('/assets/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
@endsection
@stop