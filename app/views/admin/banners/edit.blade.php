@extends('layouts.admin')
@section('title')
    Edit Banner
@endsection
@section('page_heading')
    Edit Banner
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($banner, ['route' => ['admin.banner.update', $banner->id], 'method' => 'patch'])}}
    @include('admin.banner.form', ['submitText' => 'Update Type'])
    {{ Form::close() }}
@endsection
@stop