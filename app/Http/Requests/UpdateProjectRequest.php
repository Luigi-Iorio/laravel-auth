<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'unique:projects|max:50',
            'slug' => 'unique:projects|max:100',
            'stack' => 'required|max:60',
            'description' => 'max:500',
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'Il campo titolo deve essere univoco',
            'title.max' => 'Il campo titolo deve essere minore di 50 caratteri',
            'slug.unique' => 'Il campo slug deve essere univoco',
            'slug.max' => 'Il campo slug deve essere minore di 100 caratteri',
            'stack.required' => 'Il campo stack è obbligatorio',
            'stack.max' => 'Il campo stack deve essere minore di 60 caratteri',
            'description.max' => 'Il campo stack deve essere minore di 500 caratteri',
        ];
    }
}
