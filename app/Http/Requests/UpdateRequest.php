<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
                'title' => 'required|min:5|max:500',
                // 'slug' => 'required|min:5|max:500',
                'description' => 'required|min:5',
                'content' => 'required|min:5',
                // 'image' => 'required|mimes:jpg,jpeg,png,gif',
                'posted' => 'required',
                'category_id' => 'required',
        ];
    }
}
