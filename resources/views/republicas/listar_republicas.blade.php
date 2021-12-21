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
                
                {{-- Example button to open modal --}}
                {{-- <x-adminlte-button data-toggle="modal" data-target="#modalremove1" class="btn btn-xs btn-default text-danger mx-1 shadow" icon="fa fa-lg fa-fw fa-trash"/> --}}
                <form action="{{route('republica.destroy', ['republica' => $republica->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete(this)" class="btn btn-xs btn-default text-danger mx-1 shadow"><i class="fa fa-trash"></i></button>
                </form>
                
            </td>
        </tr>
    @endforeach

    <div id="modal-confirmar-exclusao" class="modal col-12 p-0 justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                <h4>Tem certeza que deseja remover a republica?</h4>
            </div>
            <div class="card-body">
                Esta ação não pode ser desfeita.
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button id="confirm-modal-button" class="btn btn-danger mr-3">Remover</button>
                <button onclick="$('#modal-confirmar-exclusao').removeClass('show')" class="btn btn-success">Cancelar</button>
            </div>
        </div>
    </div>
    <style>
        #modal-confirmar-exclusao {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            background-color: rgba(0,0,0,0.15);
            z-index: 1050;
        }
        #modal-confirmar-exclusao.show {
            display: flex;
        }
    </style>
    

</x-adminlte-datatable>

<script>
    function confirmDelete(button) {
        $('#modal-confirmar-exclusao').addClass('show');
        $('#confirm-modal-button')[0].onclick = () => {
            $(button).parent().submit()
        };
    }
</script>



{{ $republicas->appends($request)->links() }}

<br>
Exibindo {{ $republicas->count() }} republicas de {{ $republicas->total() }} (de {{ $republicas->firstItem() }} a {{ $republicas->lastItem() }})



@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop