<div class="form-group">
  {!! Form::label('name', 'Nome do Plano') !!}
  {!! Form::text('name', null, ['class' => 'form-control txtupper', 'placeholder' => 'Nome do Plano']) !!}
  @error('name')
      <span class="text-danger">
        {{ $message }}
      </span>
  @enderror
</div>
<div class="form-group">
  {!! Form::label('description', 'Descrição do plano') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control txtupper', 'rows' => '5']) !!}
  @error('description')
      <span class="text-danger">
        {{ $message }}
      </span>
  @enderror
</div>
<div class="row justify-content-between">
  <div class="form-group">
    {!! Form::label('price', 'Valor do Plano') !!}
    {!! Form::text('price', null, ['class' => 'form-control txtupper', 'rows' => '5']) !!}
    @error('price')
        <span class="text-danger">
          {{ $message }}
        </span>
    @enderror
  </div>
  <div class="form-group">
    <p class="text-weight-bold">Ativo?</p>

    <label>
      {!! Form::radio('active', 1, true) !!}
      SIM
    </label>

    <label>
      {!! Form::radio('active', 2) !!}
      NÃO
    </label>

  </div>
</div>