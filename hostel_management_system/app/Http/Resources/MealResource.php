<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
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
        return[
            "id" => $this->id,
            "breakfast" => $this->breakfast,
            "lunch" => $this->lunch,
            "tiffin" => $this->tiffin,
            "dinner" => $this->dinner,
            "day" => $this->day,
            "description" => $this->description,
        ];
    }
}
