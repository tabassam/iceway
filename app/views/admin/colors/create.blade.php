@extends('layouts.admin')
@section('title')
    Add Color
@endsection
@section('page_heading')
    New Color
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.colors.store')) }}
        @include('admin.colors.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop