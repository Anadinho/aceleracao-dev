<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertAssinaturaRequest extends FormRequest
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
            'quantidadeAssinatura' => "required|numeric|min:10|max:200",
            'assinaturaPadrao' =>"required|string|min:10|max:200",
            'numeroVezesUsada' =>"required|numeric|min:1|max:2",
        ];
    }

    public function messages()
    {
        return [
            'quantidadeAssinatura.required' => 'O campo quantidadeAssinatura é obrigatório.',
            'quantidadeAssinatura.min' => 'O campo quantidadeAssinatura deve ter no minimo 10 caracteres.',
            'quantidadeAssinatura.max' => 'O campo quantidadeAssinatura deve ter no máximo 200 caracteres.',

            'assinaturaPadrao.required' => 'O campo assinaturaPadrao é obrigatório.',
            'assinaturaPadrao.max' => 'O campo assinaturaPadrao deve ter no máximo 200 caracteres.',
            'assinaturaPadrao.min' => 'O campo assinaturaPadrao deve ter no minimo 10 caracteres.',

            'numeroVezesUsada.required' => 'O campo numeroVezesUsada é obrigatório.',
            'numeroVezesUsada.max' => 'O campo numeroVezesUsada deve ter no máximo 2 caracteres.',
            'numeroVezesUsada.min' => 'O campo numeroVezesUsada deve ter no minimo 1 caracteres.',

        ];
    }
}
