@extends('layouts.admin')
@section('title')
    Edit Model
@endsection
@section('page_heading')
    Edit Model
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($model, ['route' => ['admin.models.update', $model->id], 'method' => 'patch'])}}
    @include('admin.models.form', ['submitText' => 'Update Model'])
    {{ Form::close() }}
@endsection
@stop