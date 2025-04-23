<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class SubjectsRequest extends FormRequest
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
            'course_id' => 'required|string',
            'subject_1' => 'required|string|max:50|unique:subjects,subject_1',
            'subject_2' => 'required|string|max:50|unique:subjects,subject_2',
            'subject_3' => 'required|string|max:50|unique:subjects,subject_3',
        ];
    }
}
