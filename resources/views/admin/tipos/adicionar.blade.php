@extends('layouts.app')

@section('content')

<div class="container">
	 <h2 class="center">Adicionar Tipos de Ponto de Iluminação</h2>

    <div class="row">
    	 <nav>
    <div class="nav-wrapper green">
      <div class="col s12">
        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
          <a href="{{route('admin.tipos')}}" class="breadcrumb">Lista de Tipos de Ponto de Iluminação</a>
        <a class="breadcrumb">Adicionar Tipos de Ponto de Iluminação</a>
       
      </div>
    </div>
  </nav>
    </div>
    <div class="row">
      <form action="{{ route('admin.tipos.salvar') }}" method="post">
        {{csrf_field()}}
        @include('admin.tipos._form')

        <button class="btn blue">Adicionar</button>
        
      </form>
     
    </div>
	
</div>

@endsection