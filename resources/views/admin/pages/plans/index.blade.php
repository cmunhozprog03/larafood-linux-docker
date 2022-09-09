@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
        <h1>Listagem de Planos</h1>
        <a href="" class="btn btn-dark">Novo</a>
    </div>

@stop

@section('content')
    <div class="container">
      @if ($plans->count())
        <div class="w3-card-4">
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>Plano</th>
                <th>Valor</th>
                <th>Acçoes</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($plans as $plan)
                <tr>
                  <td>{{ $plan->name }}</td>
                  <td>{{ $plan->price }}</td>
                  <td>
                    <a href="">Editar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
      @else
        <div class="alert alert-warning">
          <h3>Nenhum registro encontrado.</h3>
        </div>
      @endif
    </div>
    
@stop

@section('css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
