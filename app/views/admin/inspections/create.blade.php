@extends('layouts.admin')
@section('title')
    Add Inspection
@endsection
@section('page_heading')
    New Inspection
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.inspections.store')) }}
        @include('admin.inspections.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop