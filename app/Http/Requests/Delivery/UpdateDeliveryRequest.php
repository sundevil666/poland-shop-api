<?php

namespace App\Http\Requests\Delivery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeliveryRequest extends FormRequest
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
            'title' => ['required', 'max:80'],
            'time' => ['nullable', 'string'],
            'payment' => ['nullable', 'string'],
            'protected' => ['nullable', 'string'],
            'methodPayment' => ['nullable', 'string'],
        ];
    }
}
