@extends('template.default')

@section('title')
<title>Pedido</title>
@endsection
<head>
<link rel="stylesheet" href="{{url('/css/Cliente.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
@section('content')


<!-- <main>
    <div class="formulario-pedido">
        <form action="{{url('/pedido/inserir')}}" method="post">
        {{csrf_field()}}
            <h1>Pedido</h1>
            <div class="flex-div">
                <select name="produto" id="">
                    <option value="0">Produto</option>
                    @foreach($produto as $p)
                        <option value="{{$p -> idProduto}}">{{$p -> produto}}</option>
                    @endforeach
                </select>

                <select name="produto" id="">
                    <option value="0">Produto</option>
                    @foreach($produto as $p)
                        <option value="{{$p -> idProduto}}">{{$p -> produto}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="Cadastrar-Button" type="submit">Cadastrar</button>
            </div>

        </form>
    </div>

    <table class="table-pedido">
        <thead>
            <th>id Pedido</th>
            <th>id Produto</th>
            <th>id Cliente</th>
            <th>Excluir</th>
        </thead>
        @foreach($table as $t)
        <tbody>
            <td>{{$t-> idpedido}}</td>
            <td>{{$t-> produto}}</td>
            <td>{{$t-> nomecliente}}</td>
            <td><a class="style-delete"  href="/pedido/{{$p->idPedido}}">Excluir</a></td>
        </tbody>
        @endforeach
    </table>
</main> -->
<main>
<div class="form">
        <form action="{{url('/pedido/inserir')}}" method="POST">
            {{csrf_field()}}
            <div class="form-header">
                <div class="title">
                    <h1>Cadastro Pedido</h1>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Produto</label>
                    <select name="produto" id="input-linguagem">
                    <option value="0">Produto</option>
                    @foreach($produto as $p)
                        <option value="{{$p -> idProduto}}">{{$p -> produto}}</option>
                    @endforeach
                </select>
                </div>
                <div class="input-box">
                    <label for="number">Valor</label>
                    <select name="produto" id="input-linguagem">
                    <option value="0">Produto</option>
                    @foreach($produto as $p)
                        <option value="{{$p -> idProduto}}">{{$p -> valor}}</option>
                    @endforeach
                </select>
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

    <div class="modal fade bd-example-modal-xl"  id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista De Pedidos</h5>
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
        <td style="border-bottom-width:0;"><a  style=
        "
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
        <button type="button" 
        style=
        "
            margin-top: 0.3rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
            color:white;
        " 
        data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</main>
@endsection