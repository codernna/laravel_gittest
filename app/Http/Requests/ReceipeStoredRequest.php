<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceipeStoredRequest extends FormRequest
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
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',
        'rimage' => 'required|image',
        ])
        ];
    }
}