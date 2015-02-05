@extends('layouts.admin')
@section('title')
    Add Transmission
@endsection
@section('page_heading')
    New Transmission
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.transmissions.store')) }}
        @include('admin.transmissions.form', ['submitText' => 'Save'])
    {{ Form::close() }}
@endsection
@stop