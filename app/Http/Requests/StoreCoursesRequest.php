<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoursesRequest extends FormRequest
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
            'course_name' => 'required|string|max:255', // Ensure the course name is a required string with a max length of 255 characters
            'course_index' => 'required|string|max:50', // Ensure the course index is required, a string, with a max length of 50 characters
            'course_description' => 'nullable|string|max:500', // The description is optional but if provided, it should be a string with a max length of 500 characters
        ];
    }
}
