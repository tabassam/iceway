@extends('layouts.admin')
@section('title')
    Edit Inspection
@endsection
@section('page_heading')
    Edit Inspection
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($inspection, ['route' => ['admin.inspections.update', $inspection->id], 'method' => 'patch'])}}
    @include('admin.inspections.form', ['submitText' => 'Update Inspection'])
    {{ Form::close() }}
@endsection
@stop