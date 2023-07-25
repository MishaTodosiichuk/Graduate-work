<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'intro_text' => 'required|string',
            'task' => 'required|string',
            'Answer1' => 'required|string',
            'Answer2' => 'required|string',
            'Answer3' => 'required|string',
            'RightAnswer' => 'required|int',
        ];
    }
}
