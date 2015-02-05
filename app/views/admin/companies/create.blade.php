@extends('layouts.admin')
@section('title')
    Add Company
@endsection
@section('page_heading')
    Add Company
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.companies.store')) }}
        @include('admin.companies.form', ['submitText' => 'Add Company'])
    {{ Form::close() }}
@endsection
@stop