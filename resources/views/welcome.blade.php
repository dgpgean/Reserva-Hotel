@vite('resources/css/app.css')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-3xl ">Dashboard - Reservas</h1>
@stop

@section('content')
    <div class="md:flex md:flex-row flex-col w-full gap-3 flex-nowrap">

        <x-home.card-info
            bg-color="bg-[#f99830]"
            card-icon='fas fa-shopping-cart'
            card-title="150"
            card-description="Pŕe reservas"
        />


        <x-home.card-info
            bg-color="bg-gradient-success"
            card-icon='fas fa-check-circle'
            card-title="44"
            card-description="User Registrations"
        />

        <x-home.card-info
            bg-color="bg-[#00c3ec]"
            card-icon='fas fa-bed'
            card-title="1"
            card-description="Hóspedes"
        />
        <x-home.card-info
            bg-color="bg-[#e2453c]"
            card-icon='fas fa-users'
            card-title="3"
            card-description="Teste"
        />

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




