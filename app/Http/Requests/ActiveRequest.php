<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiveRequest extends  ApiRequest
{

    public function rules()
{
    return [
        "code" => [
            'required',
            'string',
        ],
        "email" => [
            'exists:users,mobile',
            'exists:confirmation_logs,unique_amount',
            'email',
        ],

        "mobile" => [
            'exists:users,mobile',
            'exists:confirmation_logs,unique_amount',
            'iran_mobile',
        ],

    ];
}
}
