<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BanerResource extends JsonResource
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
            'type'=>$this->type,
            'slug'=>$this->slug,
            'title'=>$this->title,
            'sub_title'=>$this->sub_title,
            'mobile_title'=>$this->mobile_title,
            'mobile_sub_title'=>$this->mobile_sub_title,
        ];
    }
}
