<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonSelectionDayRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_person' => 'required|integer', 
            'id_selecion_day' => 'required|integer', 
            'comments' => 'nullable|string', 
            'turn' => 'nullable|string', 
            'school' => 'nullable|string', 
            'decission' => 'nullable|string', 
        ];
    }
}
