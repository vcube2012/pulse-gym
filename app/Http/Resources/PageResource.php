<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            'slug' => $this->slug,
            'slugs' => [
                'uk'=> $this->getTranslation('slug', 'uk'),
                'ru'=> $this->getTranslation('slug', 'ru'),
            ],
            'name'=>$this->name,
            'text'=>$this->text,
        ];
    }
}
