<?php

namespace App\Http\Requests;

class ApplicationRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'comment.required' => 'Comment is required',
            'freelancer_id.required' => 'Freelancer Id is required',
            'order_id.required' => 'Order Id is required'
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
            'comment' => 'required|string',
            'freelancer_id' => 'required|int',
            'order_id' => 'required|int'
        ];
    }
}
