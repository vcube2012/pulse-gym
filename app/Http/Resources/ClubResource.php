<?php

namespace App\Http\Resources;

use Ebess\AdvancedNovaMediaLibrary\Http\Resources\MediaResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use function Illuminate\Support\Facades\Storage;


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
            'image' =>$this->imageUrl,
            'new' => $this->new,
            'address' => $this->address,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'phone' => $this->getPhone(),
            'media' => Media::collection($this->loadMedia('my_multi_collection')),
            'scheduler' => $this->scheduler,
            'schedule' => ScheduleResource::collection($this?->week())->collection->sortBy(function ($item){return $item['from'];})->groupBy(['name', function ($item) {
                return $item['day'];
            }]),
            'schedule_recruiting' =>ScheduleResource::collection($this?->weekRecruiting())->collection->sortBy(function ($item){return $item['from'];})->groupBy(['name', function ($item) {
                return $item['day'];
            }]),
            'services' => ServicesResource::collection($this->whenLoaded('services')),
            'price' => PriceCategoryResource::collection($this->whenLoaded('price', function(){
                return $this->order()->get()->load('baners');
            })),
            'coaches' => CoachResource::collection($this->whenLoaded('coaches')),
            'seo' => SeoResource::make($this->whenLoaded('seo')),

        ];
    }
}
