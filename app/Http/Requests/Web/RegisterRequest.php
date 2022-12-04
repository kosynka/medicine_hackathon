<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'photo' => ['nullable', 'image'],
            'city_id' => ['nullable', 'integer', 'exists:cities,id'],
            'password' => ['required', 'confirmed', 'string', 'max:32'],
        ];
    }
}
