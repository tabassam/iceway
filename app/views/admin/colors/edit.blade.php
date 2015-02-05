@extends('layouts.admin')
@section('title')
    Edit Color
@endsection
@section('page_heading')
    Edit Color
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($color, ['route' => ['admin.colors.update', $color->id], 'method' => 'patch'])}}
    @include('admin.colors.form', ['submitText' => 'Update Type'])
    {{ Form::close() }}
@endsection
@stop