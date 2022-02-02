<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VegetableSortStoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:vegetable_sorts',
            'distanceBetweenRows' => 'required|numeric|min:1|max:500',
            'distanceBetweenBushes' => 'required|numeric|min:1|max:500',
            'vegetable_id' => 'required|integer|numeric|min:1|exists:vegetables,id'
        ];
    }
}
