@extends('adminlte::page')

@section('title', 'Busca República')


@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
    <p>Bem vindo ao Painel Principal do Sistema Busca República</p>
    <div>
    <x-adminlte-small-box title="{{$republicas->count()}}" text="Repúblicas Cadastradas" icon="fas fa-user-plus text-teal"
    theme="primary" url="/republica" url-text="Ver todos as repúblicas"/>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop