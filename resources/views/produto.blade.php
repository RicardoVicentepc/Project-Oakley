@extends('template.default')

@section('title')
<title>Produto</title>
@endsection

<head>
</head>

@section('content')


<main>
    <div class="formulario-produto">
        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
            <h1>Produto</h1>
            <div class="flex-div">
                <!-- <label for="">Produto</label> -->
                <input type="text" name="produto" placeholder="Produto" autofocus>

                <!-- <label for="">Categoria</label> -->
                <select name="categoria" id="">
                    <option value="0">Categoria</option>
                    @foreach($categoria as $c)
                    <option value="{{ $c->idCategoria }}">{{$c->categoria}}</option>
                    @endforeach
                </select>

                <!-- <label>Valor</label> -->
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
</main>

@endsection