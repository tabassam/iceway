@extends('layouts.admin')
@section('title')
    Add Banner
@endsection
@section('page_heading')
    New Banner
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.banners.store')) }}
        @include('admin.banners.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop