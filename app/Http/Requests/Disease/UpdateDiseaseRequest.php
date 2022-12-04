<?php

namespace App\Http\Requests\Disease;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiseaseRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['nullable'],
            'inspection_type' => ['nullable'],
            'patient_id' => ['nullable'],
            'complaints' => ['nullable'],
            'ill_anamnesis' => ['nullable'],
            'check_up_results' => ['nullable'],
            'life_anamnesis' => ['nullable'],
            'allergological_anamnesis' => ['nullable'],
            'objective_data' => ['nullable'],
            'examination' => ['nullable'],
            'treatment_plan' => ['nullable'],
            'other' => ['nullable'],
        ];
    }
}
