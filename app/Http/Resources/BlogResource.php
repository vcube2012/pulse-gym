<?php

namespace App\Http\Resources;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Blog */
class BlogResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'slug' => $this->getTranslation('slug', 'uk'),
            'slug_ru' => $this->getTranslation('slug', 'ru'),
            'title' => $this->title,
            'image' => $this->imageUrl,
            'description' => $this->description,
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'date' => $this->created_at,
            'next' => Blog::query()->whereId($this->id + 1)->first()?->slug,
            'seo' => SeoResource::make($this->whenLoaded('seo'))
        ];
    }
}
