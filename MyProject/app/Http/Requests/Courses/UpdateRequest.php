<?php

namespace App\Http\Requests\Courses;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'tag' => 'required|string',
            'image' => 'required|string',
            'title_description' => 'required|string',
            'description' => 'required|string',
            'intro_text' => 'required|string',
            'video_lesson' => 'required|string',
        ];
    }
}
