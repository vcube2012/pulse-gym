<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\PriceCategory */
class PriceCategoryResource extends JsonResource
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
            'color' => $this->color,
            'new' => $this->new,
            'actia' => $this->actia,
            'comment' => $this->comment,
            'price' => PriceResource::collection($this->order()->get()),
            'baner'=>BanerResource::collection($this->whenLoaded('baners')),
        ];
    }
}
