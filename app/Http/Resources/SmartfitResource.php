<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SmartfitResource extends JsonResource
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
            'slug' => $this->slug,
            'slugs' => [
                'uk'=> $this->getTranslation('slug', 'uk'),
                'ru'=> $this->getTranslation('slug', 'ru'),
            ],
            'name' => $this->name,
            'top_title' => $this->top_title,
            'text' => $this->text,
            'title'=>$this->title,
            'sub_title'=>$this->sub_title,
            'description'=>$this->description,
            'features'=>$this->features,
            'image' =>$this->imageUrl,
            'new' => $this->new,
            'address' => $this->address,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'phone' => $this->getPhone(),
            'media' => Media::collection($this->loadMedia('my_multi_collection')),
            'scheduler' => $this->scheduler,
            'coaches' => CoachResource::collection($this->whenLoaded('coaches')),
        ];
    }
}
