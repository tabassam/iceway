@extends('layouts.admin')
@section('title')
    Add Master Body
@endsection
@section('page_heading')
    Add Master Body
@endsection

@section('content')
    @include('admin.shared.error_messages')
    {{ Form::open(array('route' => 'admin.bodyStyleMaster.store')) }}
        @include('admin.bodyStyleMaster.form', ['submitText' => 'Add Master Body'])
    {{ Form::close() }}
@endsection
@stop