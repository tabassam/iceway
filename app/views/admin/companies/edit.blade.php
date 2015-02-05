@extends('layouts.admin')
@section('title')
    Edit Company
@endsection
@section('page_heading')
    Edit Company
@endsection

@section('content')
@include('admin.shared.error_messages')
    {{Form::model($company, ['route' => ['admin.companies.update', $company->id], 'method' => 'patch'])}}
    @include('admin.companies.form', ['submitText' => 'Update Company'])
    {{ Form::close() }}
@endsection
@stop