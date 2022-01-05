@extends('layouts.layout')
@include('layouts.alerts')
<h3>documento {{$documento->id}}</h3>
    <li>{{$documento->title}}</li>
    <li>{{$documento->numeroAssinatura}}</li>
    <li>{{$documento->assinaturaResponsavel}}</li>
    <li>{{$documento->quantiadePaginas}}</li>
<a href="/documentos">Voltar</a> <br>
<form action="{{ route('documento.deletar', $documento->id) }}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Deletar</button>
</form>