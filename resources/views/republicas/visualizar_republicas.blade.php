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
    
    <div class="row"> 
        <x-adminlte-input name="rua" label="Nome da rua da república" placeholder="{{$enderecoMatch->rua}}" disabled
            fgroup-class="col-md-6"/>
    
        <x-adminlte-input name="numero" label="Número da república" placeholder="{{$enderecoMatch->numero}}" disabled
            fgroup-class="col-md-6"/>
    
        <x-adminlte-input name="complemento" label="Complemento" placeholder="{{$enderecoMatch->complemento}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
    <div>
    <x-adminlte-input name="bairro" label="Bairro da república" placeholder="{{$enderecoMatch->bairro}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
    
    
            
    <div class="row" fgroup-class="col-md-6">
    <x-adminlte-select class="form-group" name="estado" fgroup-class="col-md-6" label="Estado da república" disabled>
        <option value="">{{$enderecoMatch->estado}}</option>
    </x-adminlte-select>
    
    <x-adminlte-select class="form-group" name="cidade" fgroup-class="col-md-6" label="Cidade da república" disabled>
        <option value="">{{$enderecoMatch->cidade}}</option>
    </x-adminlte-select>
    </div>
    
    <div>
    <x-adminlte-input name="cep" label="CEP da república" placeholder="{{$enderecoMatch->cep}}" disabled
            fgroup-class="col-md-6"/>
    </div>
    
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