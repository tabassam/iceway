@extends('layouts.admin')
@section('title')
    Add Stock
@endsection
@section('page_heading')
    Add Stock
@endsection

@section('content')
    @include('admin.products.partials.image_uploader')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.products.store')) }}
        @include('admin.products.form', ['submitText' => 'Next Confirmation'])
    {{ Form::close() }}
@endsection
@stop