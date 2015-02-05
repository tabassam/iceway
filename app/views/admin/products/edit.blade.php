@extends('layouts.admin')
@section('title')
    Edit Product
@endsection
@section('page_heading')
    Edit Product
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'patch'])}}
    @include('admin.products.form', ['submitText' => 'Update Product'])
    {{ Form::close() }}
@endsection
@stop