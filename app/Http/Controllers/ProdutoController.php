<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use Illuminate\Http\Request;
use App\Models\ProdutoModel​;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      

        $produto = ProdutoModel​::all();
        $categoria = CategoriaModel::all();
        $table = DB::table('tbproduto')
            ->select('idProduto', 'categoria', 'produto', 'valor')
            ->join('tbcategoria', 'tbproduto.idcategoria', '=', 'tbcategoria.idcategoria')
            ->get();
        return view('produto', compact('produto', 'categoria', 'table'));

    }

    /**
     *  @return \Illuminate\Http\Response
     */
    //listar categoria

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
        //
        $produto = new ProdutoModel​();
        $produto -> produto = $request->produto;
        $produto -> idCategoria = $request->categoria;
        $produto -> valor = $request->valor;
        $produto -> save();
        return redirect("/produto");
        
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
        ProdutoModel​::where('idProduto',$id)->delete();

        return redirect("/produto");
    }
}
