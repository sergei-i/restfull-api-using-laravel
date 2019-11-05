<?php

namespace App\Http\Requests;

class FreelancerRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'email.required' => 'Email is required',
            'phone.string' => 'Phone should be string'
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
            'name' => 'required|string',
            'price' => 'required|int',
            'email' => 'required|email',
            'phone' => 'string'
        ];
    }
}
