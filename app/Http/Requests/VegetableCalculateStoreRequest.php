<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VegetableCalculateStoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:vegetable_calculates,name,',
            // 'name' => 'required|max:255|unique:vegetable_calculates,name,' . $this->vegetable_calculate->id,
            'bushes' => 'required|numeric|min:1|max:500',
            'rows' => 'required|numeric|min:1|max:500',
            'vegetable_sort_id' => 'required|integer|numeric|min:1|exists:vegetable_sorts,id',
            'exp' => 'required|integer|numeric|min:0|max:1'
        ];
    }
}
