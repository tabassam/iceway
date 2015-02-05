@extends('layouts.admin')
@section('title')
    Edit Master Body
@endsection
@section('page_heading')
    Edit Master Body
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($bodyStyleMaster, ['route' => ['admin.bodyStyleMaster.update', $bodyStyleMaster->id], 'method' => 'patch'])}}
    @include('admin.bodyStyleMaster.form', ['submitText' => 'Update Body'])
    {{ Form::close() }}
@endsection
@stop