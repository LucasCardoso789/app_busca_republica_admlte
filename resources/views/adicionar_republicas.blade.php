@extends('adminlte::page')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
    <p>Aqui terá o forms para adicionar uma nova República no Sistema</p>

    <form action="{{ route('republica.store') }}" method="post">
        @csrf
{{-- label com nome e imput --}}
<div class="row">
    <x-adminlte-input name="nome" label="Digite o nome da República" placeholder="República Unimontes"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="quant_quartos" label="Digite a quantidade quartos na república" placeholder="3" type="number"
        fgroup-class="col-md-6"/>
</div>

<div class="row">
    <x-adminlte-input name="preco" label="Digite o valor mensal da república" placeholder="R$600" type="number"
        fgroup-class="col-md-6"/>
</div>



{{-- Placeholder, sm size and prepend icon
<x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Escolha o arquivo">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-lightblue">
            <i class="fas fa-upload"></i>
        </div>
    </x-slot>
</x-adminlte-input-file>
 --}}

<div>
    <x-adminlte-textarea label="Insira a descrição da república" name="descricao" placeholder="Insira a descrição..."/> 
</div>

<div>
    <x-adminlte-textarea label="Se pertinente, insira as regras da república" name="regras" placeholder="Insira a regras..."/> 
</div>

<div class="row">
    <x-adminlte-input name="contato" label="Digite o telefone de contato da república" placeholder="(38) 1234-5678" type="number"
        fgroup-class="col-md-6"/>
</div>


{{-- Example with empty option (for Select) --}}
<x-adminlte-select name="comodidades_oferecidas">
    <x-adminlte-options :options="['Contas Inclusas', 'Imóvel Mobiliado', 'Quarto Mobiliado']" disabled="1"
        empty-option="Selecione uma opção"/>
</x-adminlte-select>

<div>
    <x-adminlte-button class="btn-flat m-6" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
</div>

<div>
    <br>
</div>

</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop