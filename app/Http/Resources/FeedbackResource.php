<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Feedback */
class FeedbackResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'club' => new ClubResource($this->whenLoaded('club')),
            'name' => $this->name,
            'email' => $this->email,
            'feedback' => $this->feedback,
            'answer' => $this->answer,
            'created_at' => $this->created_at,
        ];
    }
}
