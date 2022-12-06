@extends('template.default')
@section('title')
<title>Categoria</title>
@endsection

<head>
    <link rel="stylesheet" href="{{url('/css/Cliente.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
@section('content')

<!-- <main>
        
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

    
    </main> -->
<main>
    <div class="form">
        <form action="{{url('/categoria/inserir')}}" method="POST">
            {{csrf_field()}}
            <div class="form-header">
                <div class="title">
                    <h1>Cadastro Categoria</h1>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Categoria</label>
                    <input type="text" name="categoria" id="categoria" placeholder="Categoria">
                </div>

            </div>
            <div class="continue-button">
                <div class="row">
                    <div class="col-6">
                        <button><a href="#" type="submit">Cadrastar</a> </button>
                    </div>
                    <div class="col-5">
                        <button type="button" data-toggle="modal" data-target="#myModal2"><a href="#">Tabela</a></button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <div class="modal fade bd-example-modal-xl" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lista De Categorias</h5>
                    </button>
                </div>
                <div class="modal-body">
                <form class="search-container" action="/categoria" method="GET" style="margin-bottom: 1em; padding-top: 7px;">
            <input type="text" id="search" name="search" placeholder="Buscar">
            <input type="submit" style=" margin-top: 0.3rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.25rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration:none;
            color:white;" class="buttonSearch" placeholder="Buscar">

        </form>

        @if($search)
        @elseif($search == null)
            
        @endif
                    <table class="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th style="border-bottom-width:0;">Id</th>
                                <th style="border-bottom-width:0;">Categoria</th>
                                <th style="border-bottom-width:0;">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categoria as $cl)
                            <tr>
                                <td style="border-bottom-width:0;">{{$cl -> idCategoria}}</td>
                                <td style="border-bottom-width:0;">{{$cl -> categoria}}</td>
                                <td style="border-bottom-width:0;"><a style="
            margin-top: 0.3rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.25rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration:none;
            color:white;
            border-bottom-width: 0;
        " href="/categoria/{{$c->idCategoria}}">excluir</a></td>

                            </tr style="border-bottom-width:0;">
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" style="
            margin-top: 0.3rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
            color:white;
        " data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection