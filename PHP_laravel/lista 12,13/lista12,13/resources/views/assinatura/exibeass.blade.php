@extends('layouts.layout')
@include('layouts.alerts')
<h3>Assinatura {{$assinatura->id}}</h3>
    <li>{{$assinatura->quantidadeAssinatura}}</li>
    <li>{{$assinatura->assinaturaPadrao}}</li>
    <li>{{$assinatura->created_at}}</li>
    <li>{{$assinatura->updated_at}}</li>
<a href="/assinaturas">Voltar</a> <br>
<form action="{{ route('assinatura.deletar', $assinatura->id) }}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Deletar</button>
</form>