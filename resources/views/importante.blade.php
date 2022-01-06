@extends('adminlte::page')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <p>Aqui você poderá adicionar comentarios importantes!</p>

<x-adminlte-textarea name="taDesc" label="Etiqueta - Importante" rows=5 label-class="text-danger"
    igroup-size="sm" placeholder="Insira aqui seu texto...">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-danger"></i>
        </div>
    </x-slot>
</x-adminlte-textarea>

<x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>

    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop