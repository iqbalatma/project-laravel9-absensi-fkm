<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationCredentialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'token' => $this->token,
            'is_active' => $this->is_active,
            'role_id' => $this->role_id,
            'organization_id' => $this->organization_id,
            'limit' => $this->limit,
        ];
    }

    public function with($request)
    {
        return [
            'error' => 0
        ];
    }
}
