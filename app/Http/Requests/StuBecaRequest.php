<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StuBecaRequest extends FormRequest
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
            'identification_card' => 'required|exists:students,Identification_card',
            'Beca_id' => 'required|exists:becas,id',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'identification_card.required' => 'La cédula del estudiante es requerida.',
            'identification_card.exists' => 'No se encontró un estudiante con esta cédula.',
            'Beca_id.required' => 'El tipo de beca es requerido.',
            'Beca_id.exists' => 'El tipo de beca seleccionado no es válido.',
        ];
    }
}
