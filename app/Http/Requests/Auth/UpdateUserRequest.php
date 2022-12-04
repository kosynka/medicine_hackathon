<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'iin' => ['nullable', 'string'],
            'birth_date' => ['nullable', 'date'],
            'sex' => ['nullable', 'string'],
            'fio' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'photo_id' => ['nullable', 'integer'],
            'city_id' => ['nullable', 'integer'],
            'role' => ['nullable', 'string'],
            'doctor_id' => ['nullable', 'integer'],
            'hospital_id' => ['nullable', 'integer'],
        ];
    }
}
