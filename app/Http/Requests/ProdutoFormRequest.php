<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProdutoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:120|min:5',
            'preco' => 'required|decimal: 10,2',
            'ingredientes' => 'required|max:255|min:10',
            'imagem' => 'required'
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages(){
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O campo nome deve conter no máximo 120 caracteres.',
            'nome.min' => 'O campo nome deve conter no mínimo 5 caracteres.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.decimal' => 'O campo preço deve conter somente números, exemplo: 399,99.',
            'ingredientes.required' => 'O campo ingredientes é obrigatório.',
            'ingredientes.max' => 'O campo ingredientes deve conter no máximo 255 caracteres.',
            'ingredientes.min' => 'O campo ingredientes deve conter no mínimo 10 caracteres.',
            'imagem.required' => 'A imagem é obrigatória.'
        ];
    }
}
