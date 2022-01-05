<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDocumentoRequest extends FormRequest
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
            'title' => "required|string|min:10|max:200",
            'tamanho' =>"required|numeric|min:1|max:3",
            'numeroAssinatura' =>"required|numeric|min:1|max:2",
            'assinaturaResponsavel' =>"required|string|min:10|max:200",
            'quantiadePaginas' => "required|numeric|min:1|max:2"
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo title é obrigatório.',
            'title.min' => 'O campo title deve ter no minimo 10 caracteres.',
            'title.max' => 'O campo title deve ter no máximo 200 caracteres.',

            'tamanho.required' => 'O campo tamanho é obrigatório.',
            'tamanho.max' => 'O campo tamanho deve ter no máximo 3 caracteres.',
            'tamanho.min' => 'O campo tamanho deve ter no minimo 1 caracteres.',

            'numeroAssinatura.required' => 'O campo numeroAssinatura é obrigatório.',
            'numeroAssinatura.max' => 'O campo numeroAssinatura deve ter no máximo 2 caracteres.',
            'numeroAssinatura.min' => 'O campo numeroAssinatura deve ter no minimo 1 caracteres.',

            'assinaturaResponsavel.required' => 'O campo assinaturaResponsavel é obrigatório.',
            'assinaturaResponsavel.max' => 'O campo assinaturaResponsavel deve ter no máximo 200 caracteres.',
            'assinaturaResponsavel.min' => 'O campo assinaturaResponsavel deve ter no minimo 10 caracteres.',

            'quantiadePaginas.required' => 'O campo quantiadePaginas é obrigatório.',
            'quantiadePaginas.max' => 'O campo quantiadePaginas deve ter no máximo 2 caracteres.',
            'quantiadePaginas.min' => 'O campo quantiadePaginas deve ter no minimo 1 caracteres.',
   
        ];
    }
}
