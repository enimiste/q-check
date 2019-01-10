@extends('layouts.app')
@push('modules-styles')
    <link rel="stylesheet" href="{{ mix('css/user.css') }}">
@endpush
@section('content')
    <h1>Unite Controle Module</h1>
@stop
@push('modules-scripts')
    <script src="{{ mix('js/user.js') }}"></script>
@endpush