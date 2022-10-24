<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cliente = ClienteModel::all();
        return view('cliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new ClienteModel();
        $cliente -> nomeCliente = $request->txtNome;
        $cliente -> dtNascCliente = $request->txtDtNasc;
        $cliente -> estadoCivilCliente = $request->txtEstadoCivil;
        $cliente -> enderecoCliente = $request->txtNomeRua;
        $cliente -> numeroCliente = $request->txtNumero;
        $cliente -> cepCliente = $request->txtCep;
        $cliente -> cidadeCliente = $request->txtCidade;
        $cliente -> estadoCliente = $request->txtEstado;
        $cliente -> rgCliente = $request->txtRg;
        $cliente -> cpfCliente = $request->txtCpf;
        $cliente -> emailCliente = $request->txtEmail;
        $cliente -> foneCliente = $request->txtFone;
        $cliente -> celularCliente = $request->txtCelular;
        $cliente -> save();
        return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteModel::where('idCliente',$id)->delete();

        return redirect("/cliente");
    }
}
