<?php

namespace App\Http\Resources\Alert;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceResponse;

class MessageResource extends JsonResource
{
    public $statusCode;
    public $message;


    public function __construct($resource, $message, $statusCode = 200)
    {
        parent::__construct($resource);
        $this->statusCode = $statusCode;
        $this->message = $message;
    }


    public function toResponse($request)
    {
        return (new ResourceResponse($this))->toResponse($request)->setStatusCode($this->statusCode);
    }

    public function with($request)
    {
        return [
            'message' => $this->message,
        ];
    }
}
