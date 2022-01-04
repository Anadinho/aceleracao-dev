@extends('layouts.layout')
@section('pageTitle', 'Documento')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{route('documento.store')}}">
    @csrf
    @include('documentos.form')
    <button type="submit" class="btn btn-primary">Cadastrar Documento</button>
</form>
<br>
<a href="{{route('documentos.listar')}}" class="btn btn-secondary">Voltar</a>

