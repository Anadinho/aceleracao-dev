@csrf  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantidade Assinatura</label>
    <input type="text" class="form-control" name="quantidadeAssinatura" value="{{ $assinatura->quantidadeAssinatura ?? old ('quantidadeAssinatura')}}" placeholder="Informe quantidade de Assinaturas" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Assinatura Padrao</label>
  <input type="text" class="form-control" name="assinaturaPadrao" placeholder="Informe assinatura Padrao" value="{{  $assinatura->assinaturaPadrao ?? old('assinaturaPadrao') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">numero Vezes Usada</label>
  <input type="text" class="form-control" name="numeroVezesUsada" placeholder="Informe numero Vezes Usada" value="{{  $assinatura->numeroVezesUsada ?? old('numeroVezesUsada') }}" >
</div>


