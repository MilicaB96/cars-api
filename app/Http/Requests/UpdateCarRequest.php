<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'brand' => 'sometimes|string|min:2|max:255',
            'model' => 'sometimes|string|min:2|max:255',
            'year' => 'sometimes',
            'max_speed' => 'integer|between:20,300',
            'is_automatic' => 'sometimes|boolean',
            'engine' => 'sometimes|string|max:255',
            'number_of_doors' => 'integer|between:2,5',
        ];
    }
}
