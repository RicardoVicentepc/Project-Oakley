<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;
use PDF;

 

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        if($search) {
            $categoria = CategoriaModel::where([
                ['categoria', 'like', '%'. $search .'%' ]
            ])->get();
        }else{
            $categoria = CategoriaModel::all();
        }
        return view('categoria', compact('categoria'),['search' => $search] );
    }

    public function categoria(){
        $categoria = CategoriaModel::all();
        return $categoria;
    }
    public function categoriaById($id ){
        $categoria = CategoriaModel::where('idCategoria', '=', $id)->get();
        return $categoria;
    }
    // public function categoriaSalvar(Request $requeste){
    //     $categoria = new CategoriaModel;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new CategoriaModel();
        $categoria -> categoria = $request->input('categoria');
        $categoria -> save();
        return redirect("/categoria");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        CategoriaModel::where('idCategoria',$id)->delete();

        return redirect("/categoria");
    }
}
