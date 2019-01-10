@extends('layouts.app')
@push('modules-styles')
    <link rel="stylesheet" href="{{ mix('css/unitecontrole.css') }}">
@endpush
@section('content')
    <h1>Unite Controle Module</h1>
@stop
@push('modules-scripts')
    <script src="{{ mix('js/unitecontrole.js') }}"></script>
@endpush