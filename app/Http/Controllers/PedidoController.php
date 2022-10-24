<?php

namespace App\Http\Controllers;


use App\Models\ClienteModel as ClienteModel;
use App\Models\ProdutoModel​;
use App\Models\PedidoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedido = PedidoModel::all();
        $produto = ProdutoModel​::all();
        $cliente = ClienteModel::all();
        $table = DB::table('tbpedido')
            ->select('idpedido', 'nomecliente', 'produto')
            ->join('tbcliente', 'tbpedido.idCliente', '=', 'tbcliente.idCliente')
            ->join('tbproduto', 'tbpedido.idproduto', '=', 'tbproduto.idproduto')
            ->get();
        return view('pedido', compact('pedido','produto', 'cliente','table'));
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
        $pedido = new PedidoModel();
        $pedido -> idProduto = $request->produto;
        $pedido -> idCliente = $request->cliente;
        $pedido -> save();
        return redirect("/pedido");
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
        PedidoModel::where('idPedido',$id)->delete();

        return redirect("/pedido");
    }
}
