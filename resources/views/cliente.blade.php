@extends('template.default')
@section('title')
<link rel="stylesheet" href="{{url('/css/Cliente.css')}}">

<script src="{{url('/js/via-cep.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection


@section('content')



<body>
    <div class="container">
        <div class="form">
            <form action="{{url('/cliente/inserir')}}" method="POST">
                {{csrf_field()}}
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input type="text" name="txtNome" placeholder="Nome Completo">
                    </div>
                    <div class="input-box">
                        <label for="firstname">Genero</label>
                        <input type="text" name="txtNome" placeholder="Genero">
                    </div>
                    <div class="input-box">
                        <label for="lastname">Data</label>
                        <input type="date" placeholder="Data" name="txtDtNasc">
                    </div>
                    <div class="input-box">
                        <label for="email">Estado Civil</label>
                        <input id="email" type="texts" name="txtEstadoCivil" placeholder="Estado Civil" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Cep</label>
                        <input type="text" name="txtCep" id="cep" placeholder="Cep" maxlength="9" onblur="pesquisacep(this.value);">
                    </div>
                    <div class="input-box">
                        <label for="number">Rua</label>
                        <input type="text" name="txtNomeRua" id="rua" placeholder="Nome da Rua">
                    </div>
                    <div class="input-box">
                        <label for="number">Bairro</label>
                        <input type="text" name="txtBairro" id="bairro" placeholder="Nome do bairro">
                    </div>
                    <div class="input-box">
                        <label for="number">Numero</label>
                        <input type="text" name="txtNumero" placeholder="Numero">
                    </div>
                    <div class="input-box">
                        <label for="number">Complemento</label>
                        <input type="text" name="txtComplemento" placeholder="Complemento">
                    </div>
                    <div class="input-box">
                        <label for="password">Cidade</label>
                        <input type="text" name="txtCidade" id="cidade" placeholder="Cidade">
                    </div>
                    <div class="input-box">
                        <label for="password">Estado</label>
                        <input type="text" name="txtEstado" id="uf" placeholder="Estado">

                    </div>
                    <div class="input-box">
                        <label for="password">Rg</label>
                        <input type="text" name="txtRg" placeholder="RG">
                    </div>
                    <div class="input-box">
                        <label for="password">Cpf</label>
                        <input type="text" name="txtCpf" placeholder="CPF">
                    </div>
                    <div class="input-box">
                        <label for="password">Email</label>
                        <input type="emai" name="txtEmail" placeholder="exemplo@gmail.com">
                    </div>
                    <div class="input-box">
                        <label for="password">Telefone</label>
                        <input type="text" name="txtFone" placeholder="Telefone" maxlength="10">

                    </div>
                    <div class="input-box">
                        <label for="password">Celular</label>
                        <input type="text" name="txtCelular" placeholder="Celular" maxlength="11">
                    </div>
                </div>
                <div class="continue-button">
                    <div class="row">
                        <div class="col-10">
                            <button><a href="#">Cadrastar</a> </button>
                        </div>
                        <div class="col">
                            <button type="button" data-toggle="modal" data-target="#myModal"><a href="#">Tabela</a></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



  
  <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="width: 100%">
        <h4 class="modal-title">Cliente</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <table class="table" style="width:100% ;">
    <thead>
      <tr>
                <th>Id</th>
                <th>Nome </th>
                <th>Cpf</th>
                <th>Celular</th>
                <th>excluir</th>     
      </tr>
    </thead>
    <tbody>
    @foreach($cliente as $cl)
      <tr>
      <td>{{$cl -> idCliente}}</td>
      <td>{{$cl -> nomeCliente}}</td>
      <td>{{$cl -> cpfCliente}}</td>
      <td>{{$cl -> celularCliente}}</td>
      <td><a class="style-delete" href="/cliente/{{$cl->idCliente}}">excluir</a></td>

      </tr>
    </tbody>
    @endforeach
  </table>
  </div>

      <!-- Modal footer -->
      <div class="continue-button">
        <button type="button" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>




@endsection