<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class SendLogAggregatedPost extends FormRequest
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
            'country'   => 'nullable|integer',
            'user'      => 'nullable|integer',
            'date-from' => 'required|date',
            'date-to'   => 'required|date|after_or_equal:date-from',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date-to.after_or_equal' => 'wrong date',
        ];
    }
}
