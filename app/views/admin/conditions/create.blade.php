@extends('layouts.admin')
@section('title')
    Add Condition
@endsection
@section('page_heading')
    New Condition
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.conditions.store')) }}
        @include('admin.conditions.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop