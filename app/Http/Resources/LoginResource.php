<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "token" => $this->token,
            "user" => new UserResource($this->user)
        ];
    }
}
