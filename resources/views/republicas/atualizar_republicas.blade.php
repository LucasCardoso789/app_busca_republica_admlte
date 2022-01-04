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

    <h5>Endereço</h5> 

<div class="row">
    <x-adminlte-input name="rua" label="Rua da república" value="{{$enderecoMatch->rua}}"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="numero" label="Número da república" value="{{$enderecoMatch->numero}}" type="number"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="complemento" label="Digite o complemento, se necessário" value="{{$enderecoMatch->complemento}}"
        fgroup-class="col-md-6"/>
</div>

<div>
<x-adminlte-input name="bairro" label="Digite o nome do bairro da república" value="{{$enderecoMatch->bairro}}"
        fgroup-class="col-md-6"/>
</div>



        
<div class="row" fgroup-class="col-md-6">
<x-adminlte-select class="form-group" name="estado" fgroup-class="col-md-6" label="Selecione o estado da república">
    <option>{{$enderecoMatch->estado}}</option>
    @foreach($estados as $estado)
        <option> {{$estado->name}}</option>
    @endforeach
</x-adminlte-select>

<x-adminlte-select class="form-group" name="cidade" fgroup-class="col-md-6" label="Selecione a cidade da república">
    <option>{{$enderecoMatch->cidade}}</option>
    @foreach($cidades as $cidade)
        <option> {{$cidade->name}}</option>
    @endforeach
</x-adminlte-select>
</div>

<div>
<x-adminlte-input name="cep" label="Digite o cep da república (somente números)" value="{{$enderecoMatch->cep}}" type="number"
        fgroup-class="col-md-6"/>
</div>
<x-adminlte-input name="endereco_id" value="{{$enderecoMatch->id}}" type="number" hidden
    fgroup-class="col-md-6"/>
<div>

</div>
    
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