@extends('layouts.admin')
@section('title')
    Edit Model
@endsection
@section('page_heading')
    Edit Model
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($fuelType, ['route' => ['admin.fuelTypes.update', $fuelType->id], 'method' => 'patch'])}}
    @include('admin.fuelTypes.form', ['submitText' => 'Update Type'])
    {{ Form::close() }}
@endsection
@stop