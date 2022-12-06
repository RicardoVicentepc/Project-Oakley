@extends('template.default')

@section('title')
<title>Produto</title>
@endsection

<head>
    <link rel="stylesheet" href="{{url('/css/Cliente.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

@section('content')


<!-- <main>
    <div class="formulario-produto">
        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
            <h1>Produto</h1>
            <div class="flex-div">
                <input type="text" name="produto" placeholder="Produto" autofocus>

                <select name="categoria" id="">
                    <option value="0">Categoria</option>
                    @foreach($categoria as $c)
                    <option value="{{ $c->idCategoria }}">{{$c->categoria}}</option>
                    @endforeach
                </select>

                <input class="style-valor" type="number" name="valor" placeholder="Valor">
            </div>
            <div>
                <button class="Cadastrar-Button" type="submit">Cadastrar</button>
            </div>

        </form>
    </div>

    <table class="table-product">
        <thead>
            <th>ID Produto</th>
            <th>Categoria</th>
            <th>Produto</th>
            <th>Valor</th>
            <th>Excluir</th>
        </thead>
        @foreach($table as $t)
        <tbody>
            <td>{{$t->idProduto}}</td>
            <td>{{$t->categoria}}</td>
            <td>{{$t->produto}}</td>
            <td>R${{$t->valor}}</td>
            <td><a class="style-delete" href="/produto/{{$t->idProduto}}">excluir</a></td>

        </tbody>
        @endforeach
    </table>
</main> -->

<main>
    <form action="{{url('/produto/inserir')}}" method="POST">
        {{csrf_field()}}
        <div class="form-header">
            <div class="title">
                <h1>Cadastro Produto</h1>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <label for="firstname">Nome</label>
                <input type="text" name="produto" placeholder="Produto" autofocus>
            </div>
            <div class="input-box">
                <label for="firstname">Categoria</label>
                <select name="categoria" id="input-linguagem">
                    <option value="0">Categoria</option>
                    @foreach($categoria as $c)
                    <option value="{{ $c->idCategoria }}">{{$c->categoria}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-box">
                <label for="number">Valor</label>
                <input class="style-valor" type="number" name="valor" placeholder="Valor">
            </div>
        </div>
        <div class="continue-button">
            <div class="row">
                <div class="col-10">
                    <button><a href="#">Cadrastar</a> </button>
                </div>
                <div class="col">
                    <button type="button" data-toggle="modal" data-target="#myModal2"><a href="#">Tabela</a></button>
                </div>
            </div>
        </div>
    </form>

</main>









<div class="modal fade bd-example-modal-xl" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lista De Produtos</h5>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" style="width:100% ;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categoria</th>
                            <th>Produto</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produto as $cl)
                        <tr>
                            <td style="border-bottom-width:0;">{{$cl -> idProduto}}</td>
                            <td style="border-bottom-width:0;">{{$cl -> idCategoria}}</td>
                            <td style="border-bottom-width:0;">{{$cl -> produto}}</td>
                            <td style="border-bottom-width:0;">{{$cl -> valor}}</td>
                            <td style="border-bottom-width:0;"><a style="
            margin-top: 0.3rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.25rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration:none;
            color:white;
        " href="/produto/{{$cl->idProduto}}">excluir</a></td>

                        </tr>
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
@endsection