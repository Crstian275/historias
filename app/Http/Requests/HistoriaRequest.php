<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriaRequest extends FormRequest
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
            'Titulo' => ['required', 'max:150'],
            'Descripcion' => ['required', 'max:500'],
            'Texto' => ['required', 'max:10000'],
            'imagen' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'Enlace_historia' => ['required', 'max:500'],
            'Enlace_video' => ['max:500'],


        ];
    }
}
