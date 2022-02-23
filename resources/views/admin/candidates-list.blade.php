@extends('adminlte::page')

@section('title', 'Aspirantes')

@section('content_header')
    <h2>Listado de aspirantes</h2>
@stop

@section('content')
    @livewire('admin.candidates-list')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop