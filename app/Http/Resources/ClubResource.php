<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ClubResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'image' => $this->image,
            'new' => $this->new,
            'address' => $this->address,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'phone' => $this->getPhone(),
            'media' => $this->getMedia('main')->all(),
        ];
    }
}
