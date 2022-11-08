<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoalPostRequest extends FormRequest
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
            'mapel_id'     =>  'required',
            'kelas_id'     =>  'required',
            'nama'     =>  'required',
            'waktu'     =>  'required',
        ];
    }
}
