@extends('layouts.admin')
@section('title')
    Edit Steering
@endsection
@section('page_heading')
    Edit Steering
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($steering, ['route' => ['admin.steerings.update', $steering->id], 'method' => 'patch'])}}
    @include('admin.steerings.form', ['submitText' => 'Update Steering'])
    {{ Form::close() }}
@endsection
@stop