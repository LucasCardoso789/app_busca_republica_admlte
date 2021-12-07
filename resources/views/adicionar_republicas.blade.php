@extends('adminlte::page')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
    <p>Aqui terá o forms para adicionar uma nova República no Sistema</p>

{{-- label com nome e imput --}}
<div class="row">
    <x-adminlte-input name="nome" label="Digite o nome da República" placeholder="República Unimontes"
        fgroup-class="col-md-6" disable-feedback/>

    <x-adminlte-input name="quant_quartos" label="Digite a quantidade quartos na república" placeholder="3" type="number"
        fgroup-class="col-md-6" disable-feedback/>
</div>

<div class="row">
    <x-adminlte-input name="preco" label="Digite o valor mensal da república" placeholder="R$600" type="number"
        fgroup-class="col-md-6" disable-feedback/>
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
    <x-adminlte-input name="preco" label="Digite o telefone de contato da república" placeholder="(38) 1234-5678" type="number"
        fgroup-class="col-md-6" disable-feedback/>
</div>


{{-- Minimal --}}
<x-adminlte-select2 name="sel2Basic">
    <option>Option 1</option>
    <option disabled>Option 2</option>
    <option selected>Option 3</option>
</x-adminlte-select2>

{{-- Disabled --}}
<x-adminlte-select2 name="sel2Disabled" disabled>
    <option>Option 1</option>
    <option>Option 2</option>
</x-adminlte-select2>

{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="sel2Vehicle" label="Vehicle" label-class="text-lightblue"
    igroup-size="lg" data-placeholder="Select an option...">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-car-side"></i>
        </div>
    </x-slot>
    <option/>
    <option>Vehicle 1</option>
    <option>Vehicle 2</option>
</x-adminlte-select2>

{{-- With multiple slots, and plugin config parameter --}}
@php
    $config = [
        "placeholder" => "Select multiple options...",
        "allowClear" => true,
    ];
@endphp
<x-adminlte-select2 id="sel2Category" name="sel2Category[]" label="Categories"
    label-class="text-danger" igroup-size="sm" :config="$config" multiple>
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-red">
            <i class="fas fa-tag"></i>
        </div>
    </x-slot>
    <x-slot name="appendSlot">
        <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger"/>
    </x-slot>
    <option>Sports</option>
    <option>News</option>
    <option>Games</option>
    <option>Science</option>
    <option>Maths</option>
</x-adminlte-select2>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop