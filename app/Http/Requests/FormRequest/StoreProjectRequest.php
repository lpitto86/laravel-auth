<?php

namespace App\Http\Requests\FormRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|Max:64',
            'description' => 'required|Max:4064',
            'image' => 'nullable|Max:1024|url',
            'date' => 'nullable|Max:64|',
            // 'slug' => 'required',
        ];
    }
}
