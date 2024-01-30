<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'  => 'required',
            'preco' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'estoque' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'preco.required' => 'O campo preço é obrigatório!',
            'marca.required' => 'O campo marca é obrigatório!',
            'categoria.required' => 'O campo categoria é obrigatório!',
            'estoque.required' => 'O campo estoque é obrigatório!',
        ];
    }
}
