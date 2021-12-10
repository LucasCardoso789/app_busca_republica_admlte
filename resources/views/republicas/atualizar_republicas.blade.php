@extends('adminlte::page')

@section('content_header')
    <h1>Atualização de República</h1>
@stop

@section('content')
    <p>Aqui será atualizado a República do Sistema</p>
    <form action="{{ route('republica.update', ['republica' => $republicas->id])}}" method="post">
        @csrf
        @method('PUT')

    <div class="row">
        <x-adminlte-input name="nome" label="Nome da República" value="{{$republicas->nome}}" 
            fgroup-class="col-md-6"/>
    
        <x-adminlte-input name="quant_quartos" label="Quantidade de quartos na república" value="{{$republicas->quant_quartos}}" 
            fgroup-class="col-md-6"/>
    </div>
    
    <div class="row">
        <x-adminlte-input name="preco" label="Valor mensal da república" value="{{$republicas->preco}}" 
            fgroup-class="col-md-6"/>
    </div>
    
    <div>
        <x-adminlte-textarea label="Descrição da república" name="descricao">{{$republicas->descricao}}</x-adminlte-textarea> 
    </div>
    
    <div>
        <x-adminlte-textarea label="Regras da república" name="regras">{{$republicas->regras}}</x-adminlte-textarea> 
    </div>
    
    <div class="row">
        <x-adminlte-input name="contato" label="Telefone de contato da república" value="{{$republicas->contato}}" 
            fgroup-class="col-md-6"/>
    </div>
    
    <x-adminlte-select name="comodidades_oferecidas">
        <x-adminlte-options :options="['Contas Inclusas', 'Imóvel Mobiliado', 'Quarto Mobiliado']" disabled="1"
            empty-option="Selecione uma opção"/>
    </x-adminlte-select>
    
    <div>
        <x-adminlte-button class="btn-flat m-6" type="submit" label="Atualizar" theme="success" icon="fas fa-lg fa-save"/>
    </div>
    
    <div>
        <br>
    </div>

    </form>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop