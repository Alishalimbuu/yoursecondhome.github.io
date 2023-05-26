<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
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
            "firstName" => $this->user->first_name,
            "lastName" => $this->user->last_name,
            "image" => asset($this->user->photo),
            "rating" => $this->rating,
            "message" => $this->message

        ];
    }
}
