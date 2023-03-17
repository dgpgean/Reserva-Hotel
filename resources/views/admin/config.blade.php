@vite('resources/css/app.css')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-3xl ">Configurações do sistema</h1>
@stop

@section('content')
        <form method="POST" action="{{route('config.store')}}" class="flex flex-col gap-8 py-8 items-center bg-white"  enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Geral</h3>

            <x-input
            value="{{$config->title ?? ''}}"
            label="Nome do Hotel"
            required="*"
            place="Insira o nome do hotel"
            type="text"
            name="title"
            />

            <x-input
            value=""
            label="Logo"
            required="*"
            place="Insira o nome do hotel"
            type="file"
            name="logo_id"
            />

            <x-button-submit
            text="Atualizar"
            />

        </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




