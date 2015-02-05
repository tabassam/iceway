@extends('layouts.admin')
@section('title')
    Edit Transmission
@endsection
@section('page_heading')
    Edit Transmissions
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($transmission, ['route' => ['admin.transmissions.update', $transmission->id], 'method' => 'patch'])}}
    @include('admin.colors.form', ['submitText' => 'Update Transmission'])
    {{ Form::close() }}
@endsection
@stop