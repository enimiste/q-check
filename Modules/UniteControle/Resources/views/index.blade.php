@extends('layouts.app')
@push('modules-styles')
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">
@endpush
@section('content')
    <h1>Unite Controle Module</h1>
@stop
@push('modules-scripts')
    <script src="{{ mix('js/blog.js') }}"></script>
@endpush