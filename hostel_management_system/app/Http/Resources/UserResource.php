<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "address" => $this->address,
            "contact" => $this->contact,
            "email" => $this->email,
            "dob" => $this->dob,
            "room" => $this->room->name,
            "bed" => $this->bed->name,
            "photo" => asset($this->photo),
            "status" => $this->status
        ];
    }
}
