<hr>
<h1>Meus Documentos</h1>
<ul>
@foreach ($documentos as $k => $item)
    <h3>documento {{$k + 1}}</h3>
    <li>{{$item->title}}</li>
    <li>{{$item->numeroAssinatura}}</li>
    <li>{{$item->assinaturaResponsavel}}</li>
    <li>{{$item->quantiadePaginas}}</li>
    <a href="{{route('documento.listar', $item['id'])}}">Visualizar</a> <br>
@endforeach
</ul>