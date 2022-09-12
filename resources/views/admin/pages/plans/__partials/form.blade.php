@csrf
<div class="form-group">
  <label for="">Nome do Plano</label>
  <input type="text" name="name" class="form-control txtupper">
  @error('name')
      <small class="text-danger">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="">Descrição do Plano</label>
  <textarea name="description" class="form-control txtupper" rows="5"></textarea>
  @error('description')
      <small class="text-danger">{{ $message }}</small>
  @enderror
</div>
<div class="row justify-content-between">
  <div class="form-group">
    <label for="">Valor do Plano</label>
    <input type="text" name="price" class="form-control txtupper">
    @error('price')
      <small class="text-danger">{{ $message }}</small>
  @enderror
  </div>
  <div class="form-group">
    <label for="">Ativo?</label>
    {!! Form::radio(active, $value, $checked, [$options]) !!}
    <div class="form-check">
      <input class="form-check-input" type="radio" name="active" id="exampleRadios1" value="1" checked>
      <label class="form-check-label" for="exampleRadios1">
        SIM
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="active" id="exampleRadios2" value="2">
      <label class="form-check-label" for="exampleRadios2">
        NÃO
      </label>
    </div>
    
    
    
  </div>
</div>
