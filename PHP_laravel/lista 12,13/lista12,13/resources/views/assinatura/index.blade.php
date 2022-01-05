@extends('layouts.layout')
@include('layouts.alerts')
<hr>
<h1>Minhas Assinaturas - <a href="{{route('assinaturas.criar')}}">Criar nova Assinatura</a></h1>
<ul>
@foreach ($assinaturas as $k => $assinatura)
    <h3>Assinatura {{$assinatura->id}}</h3>
    <li>{{$assinatura->quantidadeAssinatura}}</li>
    <li>{{$assinatura->assinaturaPadrao}}</li>
    <li>{{$assinatura->created_at}}</li>
    <li>{{$assinatura->updated_at}}</li>
    <a href="{{route('assinatura.listar', $assinatura->id)}}">Visualizar</a> <br>
@endforeach
</ul>