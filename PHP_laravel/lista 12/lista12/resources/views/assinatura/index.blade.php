<hr>
<h1>Minhas Assinaturas</h1>
<ul>
@foreach ($assinaturas as $k => $item)
    <h3>Assinatura {{$k + 1}}</h3>
    <li>{{$item->id}}</li>
    <li>{{$item->quantidadeAssinatura}}</li>
    <li>{{$item->assinaturaPadrao}}</li>
    <li>{{$item->created_at}}</li>
    <li>{{$item->updated_at}}</li>
    <a href="{{route('assinatura.listar', $item['id'])}}">Visualizar</a> <br>
@endforeach
</ul>