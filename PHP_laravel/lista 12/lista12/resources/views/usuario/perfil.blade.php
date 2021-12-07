<h1>Usuario,</h1>
{{$usuario['nome']}}
<br>
idade, {{$usuario['idade']}}
<br>


<hr>
<h1>Meus Documentos</h1>
<ul>
@foreach ($documento as $k => $item)
    <h3>documento {{$k + 1}}</h3>
    <li>{{$item->title}}</li>
    <li>{{$item->numeroAssinatura}}</li>
    <li>{{$item->assinaturaResponsavel}}</li>
    <li>{{$item->quantiadePaginas}}</li>
@endforeach
</ul>
