<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataSoalPostRequest extends FormRequest
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
            'soal_id'   => 'required',
            'soal'  => 'required',
            'pil_1'  => 'required',
            'pil_2'  => 'required',
            'pil_3'  => 'required',
            'pil_4'  => 'required',
            'kunci'  => 'required',
        ];
    }
}
