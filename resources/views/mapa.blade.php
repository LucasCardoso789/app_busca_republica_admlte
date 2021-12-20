@extends('adminlte::page')

@section('title', 'Mapa das República')


@section('content_header')
<h1>Mapa das Repúblicas</h1>
@stop

@section('content')
    <p>Mapa das Republicas do Sistema Busca República</p>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.138580228293!2d-43.88153428536113!3d-16.719935850851684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x754ab5bc36990c9%3A0xa809bd14bd946505!2sUniversidade%20Estadual%20de%20Montes%20Claros%20-%20Unimontes!5e0!3m2!1spt-PT!2sbr!4v1640023406468!5m2!1spt-PT!2sbr" width="900" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop