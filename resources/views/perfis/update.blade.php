@extends('adminlte::page')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <p>Aqui você poderá editar informações sobre o seu perfil!</p>
    <form action="{{ route('perfil.update', ['perfil' => $usuario])}}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <x-adminlte-input name="name" label="Nome do Usuário" value="{{$user}}" 
            fgroup-class="col-md-6"/>
    </div>

    <div class="row">
        <x-adminlte-input name="email" label="Email do Usuário" value="{{$email}}" 
            fgroup-class="col-md-6"/>
    </div>


    <div>
        <x-adminlte-button class="btn-flat m-6" type="submit" label="Atualizar" theme="success" icon="fas fa-lg fa-save"/>
    </div>

    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop