@extends('template.default')
@section('title')
<title>Categoria</title>
@endsection
<head>
  <link rel="stylesheet" href="{{url('/css/Home.css')}}">
    
</head>
@section('content')

<main>
    
    <div class="formulario-categoria">
        <form action="{{url('/categoria/inserir')}}" method="post">
        {{csrf_field()}}
            <h1>Categoria</h1>
            <div>
                <label>Categoria</label>
                <input type="text" name="categoria" id="categoria" placeholder="Categoria">
            </div>
            <div>
                <button class="Cadastrar-Button" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <form class="search-container" action="/categoria" method="GET">
        <input type="text" id="search" name="search" placeholder="Buscar">
        <input type="submit" class="buttonSearch" placeholder="Buscar">

    </form>

    @if($search)
        <h1 class="titleHome">Busque pela a categoria : {{$search}}</h1>
    @elseif($search == null)
        
    @endif
    <table class="table-category">
        <thead>
            <th>id Categoria</th>
            <th>Nome Categoria</th>
            <th>excluir</th>
        </thead>
        @foreach($categoria as $c)
        <tbody>  
                <td>{{$c->idCategoria}}</td>
                <td>{{$c->categoria}}</td>   
                <td><a class="style-delete" href="/categoria/{{$c->idCategoria}}">excluir</a></td>  
        </tbody>
        @endforeach
    </table>

 
</main>

@endsection