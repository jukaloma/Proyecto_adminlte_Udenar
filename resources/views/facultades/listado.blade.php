@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Facultades</h1>
<a class="btn btn-success" href="/facultades/registrar">Adicionar</a>


@stop


@section('content')
<p>Listado de Facultades</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        
        @php
        $x = 0
        @endphp 
        @foreach ($facultades as $f)
        <tr>
            <th scope="row">{{$x += 1}}</th>
            <td> {{ $f -> codfacultad}}</td>
            <td> {{ $f -> nomfacultad}}</td>
            <td>
                <a class="btn btn-primary">Editar</a>
                <a class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop