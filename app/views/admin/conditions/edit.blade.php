@extends('layouts.admin')
@section('title')
    Edit Condition
@endsection
@section('page_heading')
    Edit Condition
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($condition, ['route' => ['admin.conditions.update', $condition->id], 'method' => 'patch'])}}
    @include('admin.colors.form', ['submitText' => 'Update Condition'])
    {{ Form::close() }}
@endsection
@stop