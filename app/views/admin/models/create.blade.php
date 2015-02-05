@extends('layouts.admin')
@section('title')
    Add Model
@endsection
@section('page_heading')
    Add Model
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.models.store')) }}
        @include('admin.models.form', ['submitText' => 'Add Model'])
    {{ Form::close() }}
@endsection
@stop