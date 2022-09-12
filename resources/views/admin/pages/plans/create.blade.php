@extends('adminlte::page')

@section('title', 'Novo Plano')

{{-- @section('content_header')
    <div class="row justify-content-between">
        <h1>Novo Plano</h1>
        
    </div>

@stop --}}

@section('content')
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-5 col-lg-5">
      {!! Form::open(['route' => 'admin.plans.store', 'autocomplete' => 'off']) !!}
        <div class="w3-card-4 mt-2">
          <header class="w3-container w3-dark-gray">
            <h2>NOVO PLANO</h2>
          </header>
          <div class="w3-container">
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
            
            
            {{-- @include('admin.pages.plans.__partials.form') --}}
          </div>
          <footer class="w3-container">
            <div class="row justify-content-around mb-2">
              <a href="" class="btn btn-outline-secondary">Cancelar</a>
              {!! Form::submit('SALVAR', ['class' => 'btn btn-dark']) !!}
            </div>
            
          </footer>
          
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  

@stop

@section('css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
