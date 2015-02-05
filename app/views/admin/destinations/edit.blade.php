@extends('layouts.admin')
@section('title')
    Edit Destination
@endsection
@section('page_heading')
    Edit Destination
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($destination, ['route' => ['admin.destinations.update', $destination->id], 'method' => 'patch'])}}
    @include('admin.destinations.form', ['submitText' => 'Update Destination'])
    {{ Form::close() }}
@endsection
@stop