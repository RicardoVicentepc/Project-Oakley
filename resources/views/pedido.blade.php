@extends('template.default')

@section('title')
<title>Pedido</title>
@endsection
<head>

</head>
@section('content')


<main>
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

                <select name="cliente" id="">
                    <option value="0">Cliente</option>
                    @foreach($cliente as $cl)
                        <option value="{{$cl -> idCliente}}">{{$cl-> nomeCliente}}</option>
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
</main>

@endsection