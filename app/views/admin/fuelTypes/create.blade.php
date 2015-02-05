@extends('layouts.admin')
@section('title')
    Add Fuel Type
@endsection
@section('page_heading')
    New Fuel Type
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.fuelTypes.store')) }}
        @include('admin.fuelTypes.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop