<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnneeFormRequest extends FormRequest
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
            //
            'debut_annee' => 'required|date_format:Y|different:fin_annee|unique:annee',
            'fin_annee' => 'required|date_format:Y|gt:debut_annee|different:debut_annee|unique:annee'
        ];
    }
}
