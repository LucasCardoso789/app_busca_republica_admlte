@extends('adminlte::page')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <p>Aqui você poderá editar informações sobre o seu perfil!</p>

    <div class="row">
        <x-adminlte-input name="nome" label="Nome do Usuário" value="{{$user}}" 
            fgroup-class="col-md-6" disabled/>
    </div>

    <div class="row">
        <x-adminlte-input name="email" label="Email do Usuário" value="{{$email}}" 
            fgroup-class="col-md-6" disabled/>
    </div>

    <div class="row">
        <x-adminlte-input name="created_at" label="Criado em" value="{{$newDateCreatedTrue}}" 
            fgroup-class="col-md-6" disabled/>
    </div>

    <div class="row">
        <x-adminlte-input name="updated_at" label="Atualizado em" value="{{$newDateUpdatedTrue}}" 
            fgroup-class="col-md-6" disabled/>
    </div>

    
    <div>
        <a href="{{route('perfil.edit', ['perfil' => $usuario])}}" class="btn btn-primary btn-lg active" role="button">Atualizar dados</a>      
    </div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop