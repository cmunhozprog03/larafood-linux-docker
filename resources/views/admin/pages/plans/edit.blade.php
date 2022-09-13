@extends('adminlte::page')

@section('title', 'Editar Plano')

{{-- @section('content_header')
    <div class="row justify-content-between">
        <h1>Novo Plano</h1>
        
    </div>

@stop --}}

@section('content')
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-5 col-lg-5">
      {!! Form::model($plan, ['route' => ['admin.plans.update', $plan->url], 'autocomplete' => 'off', 'method' => 'put']) !!}
        <div class="w3-card-4 mt-2">
          <header class="w3-container w3-dark-gray">
            <h2>EDITAR PLANO</h2>
          </header>
          <div class="w3-container">
            
            @include('admin.pages.plans.__partials.form')
            
            {{-- @include('admin.pages.plans.__partials.form') --}}
          </div>
          <footer class="w3-container">
            <div class="row justify-content-around mb-2">
              <a href="" class="btn btn-outline-secondary">Cancelar</a>
              {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-dark']) !!}
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
