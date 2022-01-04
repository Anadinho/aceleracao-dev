@csrf

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="title" value="{{ $documento->title ?? old ('title')}}" placeholder="Informe O titulo" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">tamanho</label>
  <input type="text" class="form-control" name="tamanho" placeholder="Informe o tema da aula" value="{{  $documento->tamanho ?? old('tamanho') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">numeroAssinatura</label>
  <input type="text" class="form-control" name="numeroAssinatura" placeholder="Informe a duracao da aula" value="{{  $documento->numeroAssinatura ?? old('numeroAssinatura') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">assinaturaResponsavel</label>
  <input type="text" class="form-control" name="assinaturaResponsavel" placeholder="Adicione observacão da aula" value="{{  $documento->assinaturaResponsavel ?? old('assinaturaResponsavel') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">quantidade de Paginas</label>
  <input type="text" class="form-control" name="quantiadePaginas" placeholder="Adicione observacão da aula" value="{{  $documento->quantiadePaginas ?? old('quantiadePaginas') }}" >
</div>

