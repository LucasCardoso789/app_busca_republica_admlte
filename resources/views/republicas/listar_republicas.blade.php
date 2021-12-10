@extends('adminlte::page')

@section('content_header')
    <h1>Listagem de Repúblicas</h1>
@stop

@section('content')
    <p>Aqui será listado todas as Repúblicas do Sistema</p>

{{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Nome',
    ['label' => 'Contato', 'width' => 40],
    ['label' => 'Ação', 'no-export' => true, 'width' => 15],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table" :heads="$heads">
    @foreach($republicas as $republica)
        <tr>
            <td>{{$republica->id}}</td>
            <td>{{$republica->nome}}</td>
            <td>{{$republica->contato}}</td>
            <td>                 
                <a href="{{route('republica.show', ['republica' => $republica->id])}}" class="btn btn-xs btn-default text-teal mx-1 shadow" role="button">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </a>

                <a href="{{route('republica.edit', ['republica' => $republica->id])}}" class="btn btn-xs btn-default text-primary mx-1 shadow" role="button">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </a>

                {{-- <a href="{{route('republica.destroy', ['republica' => $republica->id])}}" class="btn btn-xs btn-default text-danger mx-1 shadow" role="button">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </a> --}}

                {{-- Custom --}}
                <x-adminlte-modal id="modalremove1" title="Remover república" size="lg" theme="red"
                icon="fas fa-bell" v-centered static-backdrop scrollable>
                Tem certeza que deseja remover a república?
                <x-slot name="footerSlot">
                    <x-adminlte-button onclick="remover()" theme="success" label="Sim"/>
                    <x-adminlte-button theme="danger" label="Fechar" data-dismiss="modal"/>
                </x-slot>
                </x-adminlte-modal>
                {{-- Example button to open modal --}}
                <x-adminlte-button data-toggle="modal" data-target="#modalremove1" class="btn btn-xs btn-default text-danger mx-1 shadow" icon="fa fa-lg fa-fw fa-trash"/>
            </td>
        </tr>
    @endforeach
</x-adminlte-datatable>

<script>
    function remover() {
        
        return redirect()->route('republica.destroy', ['republica' => $republica->id])    
          
    }
</script>



{{ $republicas->appends($request)->links() }}

<br>
Exibindo {{ $republicas->count() }} republicas de {{ $republicas->total() }} (de {{ $republicas->firstItem() }} a {{ $republicas->lastItem() }})



@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop