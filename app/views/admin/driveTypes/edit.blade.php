@extends('layouts.admin')
@section('title')
    Edit Drive
@endsection
@section('page_heading')
    Edit Drive
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($driveType, ['route' => ['admin.driveTypes.update', $driveType->id], 'method' => 'patch'])}}
    @include('admin.driveTypes.form', ['submitText' => 'Update Type'])
    {{ Form::close() }}
@endsection
@stop