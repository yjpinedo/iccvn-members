@extends('adminlte::page')

@section('title_postfix', ' - Sectors')

@section('content_header')
    <h1>Sectors</h1>
@stop

@section('content')
    @livewire('livewire.sector-component')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
