<?php

namespace App\Http\Requests\Product;

use App\Rules\SlugRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
            ],
            'slug' => [
                'required',
                'string',
                Rule::unique('App\Models\Product'),
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                new SlugRule
            ],
            'price' => [
                'required',
                'numeric',
                'min:1'
            ],
            'description' => [
                'nullable',
                'string'
            ]
        ];
    }
}
