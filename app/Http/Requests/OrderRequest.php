<?php

namespace App\Http\Requests;

class OrderRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'description.required' => 'Description is required',
            'customer_id.required' => 'Customer Id is required',
            'application_id.required' => 'Application Id is required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required|string',
            'customer_id' => 'required|int',
            'application_id' => 'required|int'
        ];
    }
}
