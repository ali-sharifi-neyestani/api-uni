<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRequest extends ApiRequest
{

    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    "subject" => [
                        'required',
                        'string',
                        'max:255',
                    ],

                    "body" => [
                        'required',
                        'string',
                        'min:10',
                        'max:1000',
                    ],


                ];
            }
            case 'PUT':
            {
                return [

                ];
            }


            default:
                break;
        }
    }
}
