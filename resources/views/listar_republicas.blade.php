@extends('adminlte::page')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
    <p>Aqui será listado todas as Repúblicas do Sistema</p>

{{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Nome',
    ['label' => 'Contato', 'width' => 40],
    ['label' => 'Ação', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

$config = [
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table" :heads="$heads">
    @foreach($republica as $republicas)
        <tr>
            <td>{{$republicas->id}}</td>
            <td>{{$republicas->nome}}</td>
            <td>{{$republicas->contato}}</td>
        </tr>
    @endforeach
</x-adminlte-datatable>



@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop