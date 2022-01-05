@extends('layouts.layout')
@section('pageTitle', 'Assinatura')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{route('assinatura.store')}}">
    @csrf
    @include('assinatura.form')
    <button type="submit" class="btn btn-primary">Cadastrar Assinatura</button>
</form>
<br>
<a href="{{route('assinaturas.listar')}}" class="btn btn-secondary">Voltar</a>

