@extends('layouts.admin')
@section('title')
    Add Destination
@endsection
@section('page_heading')
    New Destination
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.destinations.store')) }}
        @include('admin.destinations.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop