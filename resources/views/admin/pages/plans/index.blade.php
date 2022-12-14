@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row justify-content-between">
      <div class="col-md-4 col-sm-12 col-lg-4">
        <h1>Listagem de Planos</h1>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <a href="{{ route('admin.plans.create') }}" class="btn btn-dark">Novo</a>

      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <form action="{{ route('planos.search') }}" method="POST" class="form form-inline">
          @csrf
          <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
          <button type="submit" class="btn btn-dark">Filtrar</button>
      </form>
      </div>
        
        
        
        
      </div>

@stop

@section('content')
    <div class="container">
      @if ($plans->count())
        <div class="w3-card-4">
          <table class="table table-hover table-striped table-bordered">
            <thead class="w3-dark-gray w3-center">
              <tr>
                <th width="50%">Plano</th>
                <th width="15%">Valor</th>
                <th width="5%">Ativo</th>
                <th width="30%">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($plans as $plan)
                <tr>
                  <td>{{ $plan->name }}</td>
                  <td class="w3-center">R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                  <td class="w3-center">@if ($plan->active == "1")
                    <i class="fas fa-toggle-on fa-lg text-success"></i>  
                  @elseif($plan->active == "2")
                    <i class="fas fa-toggle-off fa-lg text-danger	"></i> 
                  @endif</td>
                  <td class="w3-center">
                    <a href="{{ route('admin.plans.edit', $plan->url) }}">Editar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
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
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
