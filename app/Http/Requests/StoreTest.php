<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|between:6,255|string",
            "completed" => "nullable|in:completed|string",
            "grade" => "nullable|numeric|between:1,10",
            "EC" => "required|numeric|between:1,10",
            "course_id" => "nullable|numeric"
        ];
    }
}
