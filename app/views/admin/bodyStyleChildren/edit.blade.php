@extends('layouts.admin')
@section('title')
    Edit Body Style Children
@endsection
@section('page_heading')
    Edit Body Style Children
@endsection

@section('content')

    @include('admin.shared.error_messages')

    {{Form::model($bodyStyleChildren, ['route' => ['admin.bodyStyleChildren.update', $bodyStyleChildren->id], 'method' => 'patch'])}}
    @include('admin.bodyStyleChildren.form', ['submitText' => 'Update Body Style Children'])
    {{ Form::close() }}
@endsection
@stop