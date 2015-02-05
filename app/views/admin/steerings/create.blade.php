@extends('layouts.admin')
@section('title')
    Steering Color
@endsection
@section('page_heading')
    New Steering
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.steerings.store')) }}
        @include('admin.steerings.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop