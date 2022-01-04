@extends('adminlte::page')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <p>Aqui você poderá editar informações sobre o seu perfil!</p>

    <div class="row">
        <x-adminlte-input name="nome" label="Nome do Ssuário" value="{{$usuarios->name}}" 
            fgroup-class="col-md-6"/>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop