<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'First_name' => 'required|string',
			'Suname' => 'required|string',
			'Identification_card' => 'required|string',
			'Phone' => 'required|string',
			'Room_telephone' => 'required|string',
			'Email' => 'required|string',
			'Semeter' => 'required',
        ];
    }
}
