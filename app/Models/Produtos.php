<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = [
        'nome', 'preco', 'marca', 'categoria_id', 'estoque'
    ];

    public function inserir($dados) {

        /*
        try {
            $cadastrar = $this->create([
                'nome'          => $dados['nome'],
                'preco'         => $dados['preco'],
                'marca'         => $dados['marca'],
                'categoria'     => $dados['categoria'],
                'estoque'       => $dados['estoque'],
            ]);

            return [
                'status' => true,
                'message' => 'Sucesso ao cadastrar o produto!'
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Falha ao cadastrar o produto!',
            ];
        }
        */

        $cadastrar = $this->create([
            'nome'          => $dados['nome'],
            'preco'         => $dados['preco'],
            'marca'         => $dados['marca'],
            'categoria_id'  => $dados['categoria'],
            'estoque'       => $dados['estoque'],
        ]);

        if($cadastrar){
            return [
                'status' => true,
                'message' => 'Sucesso ao cadastrar o produto!'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Falha ao cadastrar o produto!',
            ];
        }   
    }
}
