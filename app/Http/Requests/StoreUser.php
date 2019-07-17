<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            "email" => "required|between:6,255|email|string",
            "user" => "nullable|in:true|string",
            "administrator" => "nullable|in:true|string",
        ];
    }
}
