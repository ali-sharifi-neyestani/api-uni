<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends ApiRequest
{

    public function rules()
    {
        return [
            "name" => [
                'required',
                'string',
            ],

            "mobile" => [
                'required',
                'unique:users',
                'iran_mobile',
            ],




        ];
    }
}
