@extends('adminlte::page')

@section('content_header')
    <h1>Visualização de República</h1>
@stop

@section('content')
    <p>Aqui será visualizado a República do Sistema com mais detalhes</p>

    <div class="row">
        <x-adminlte-input name="nome" label="Nome da República" placeholder="{{$republicas->nome}}" disabled
            fgroup-class="col-md-6"/>
    
        <x-adminlte-input name="quant_quartos" label="Quantidade de quartos na república" placeholder="{{$republicas->quant_quartos}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
    <div class="row">
        <x-adminlte-input name="preco" label="Valor mensal da república" placeholder="{{$republicas->preco}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
    <div>
        <x-adminlte-textarea label="Descrição da república" name="descricao" placeholder="{{$republicas->descricao}}" disabled/> 
    </div>
    
    <div>
        <x-adminlte-textarea label="Regras da república" name="regras" placeholder="{{$republicas->regras}}" disabled/> 
    </div>
    
    <div class="row">
        <x-adminlte-input name="contato" label="Telefone de contato da república" placeholder="{{$republicas->contato}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
    <x-adminlte-select name="comodidades_oferecidas">
        <x-adminlte-options :options="['Contas Inclusas', 'Imóvel Mobiliado', 'Quarto Mobiliado']" disabled="1"
            empty-option="Selecione uma opção"/>
    </x-adminlte-select>
    
    <div>
        <a href="{{route('republica.index')}}" class="btn btn-primary btn-lg active" role="button">Fechar</a>
    </div>
    
    <div>
        <br>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop