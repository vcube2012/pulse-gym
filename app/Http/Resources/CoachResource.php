<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Coach */
class CoachResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'title' => $this->title,
            'image' => $this->imageUrl,
            'description' => $this->description,
            'phone' => $this->phone,
            'social' => $this->getSocial(),
            'specialization' => SpecializationResource::collection($this->whenLoaded('specialization')),
            'seo' => SeoResource::make($this->whenLoaded('seo')),
        ];
    }
}
