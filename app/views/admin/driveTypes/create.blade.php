@extends('layouts.admin')
@section('title')
    Add Drive Type
@endsection
@section('page_heading')
    New Drive Type
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.driveTypes.store')) }}
        @include('admin.driveTypes.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop