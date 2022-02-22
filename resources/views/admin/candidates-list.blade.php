@extends('adminlte::page')

@section('title', 'Aspirantes')

@section('content_header')
    <h1>Listado de aspirantes</h1>
@stop

@section('content')
    @livewire('candidate-list')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop