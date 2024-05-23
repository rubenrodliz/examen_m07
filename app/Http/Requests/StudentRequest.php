<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
        $rules = [
            'name' => 'string|max:255',
            'email' => 'email|max:255',
            'birthDate' => 'date',
            'course_id' => 'exists:courses,id'
        ];
        
        if ($this->getMethod() == 'POST') {
            foreach ($rules as $key => $rule) {
                $rules[$key] = 'required|' . $rule;
            }
        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'message' => 'Some fields are missing or invalid',
            'errors' => $validator->errors()
        ], 422);

        throw new HttpResponseException($response);
    }
}
