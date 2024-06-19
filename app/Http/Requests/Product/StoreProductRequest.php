<?php

namespace App\Http\Requests\Product;

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
            'name' => ['required', 'max:80'],
            'labelMark' => ['nullable', 'max:80'],
            'description' => ['nullable'],
            'discount' => ['nullable','integer', 'min:1', 'max:100'],
            'discount_label' => ['nullable','string'],
            'price' => ['required','numeric'],
            'code' => ['required', 'string'],
            'quantity' => ['nullable', 'integer'],
            'preview' => ['nullable', 'string'],
            'category_id' => ['nullable', 'integer', 'exists:categories,id'],
            'promoCod' => ['nullable', 'string'],
            'status' => ['nullable', 'boolean'],
            'unit_of_measure' => ['string'],
            'images' => ['nullable', 'array'],
            'type' => ['required','string'],
            'weight' => ['required','integer'],
            'box_id' => ['exists:boxes,id', 'integer'],
            'size' => ['required', 'integer'],
        ];
    }
}
