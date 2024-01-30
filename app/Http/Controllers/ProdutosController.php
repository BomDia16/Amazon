<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutosRequest;
use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produtos;

    public function __construct(Produtos $produtos) {
        $this->produtos = $produtos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categorias $categorias)
    {
        $compras = $this->produtos->orderBy('id', 'ASC')->get();

        $categoria = $categorias->type();

        return view('produtos',
                    compact('compras', 'categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutosRequest $request)
    {
        $dados = $request->all();

        $inserir = $this->produtos->inserir($dados);
        if($inserir['status']) {
            return redirect()->route('produtos.index');
        }
        return redirect()
                ->back()
                ->withErrors($inserir['message']);
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
        //
    }
}
