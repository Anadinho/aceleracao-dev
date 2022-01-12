<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsereRelatorioRequest extends FormRequest
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

            "documento_id"          => "required",
            "assinatura_id"         => "required",
            "status"                => "required",
            "dataAnalise"           => "required",
            "visualizadores"        => "required",
        ];
    }

    public function messages()
    {
        return [
            'documento_id.required'     => 'O campo documento_id é obrigatório.',
            'assinatura_id.required'    => 'O campo documento_id é obrigatório.',
            'status.required'           => 'O campo documento_id é obrigatório.',
            'dataAnalise.required'      => 'O campo documento_id é obrigatório.',
            'visualizadores.required'   => 'O campo documento_id é obrigatório.',
        ];
    }
}
