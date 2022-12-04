<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecordRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'inspection_type' => ['required', 'string'],
            'patient_id' => ['required', 'integer'],
            'complaints' => ['required', 'string'],
            'ill_anamnesis' => ['required', 'string'],
            'check_up_results' => ['required', 'string'],
            'life_anamnesis' => ['required', 'string'],
            'allergological_anamnesis' => ['required', 'string'],
            'objective_data' => ['required', 'string'],
            'examination' => ['required', 'string'],
            'treatment_plan' => ['required', 'string'],
            'other' => ['required', 'string'],
        ];
    }
}
