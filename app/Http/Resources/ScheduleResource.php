<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Schedule */
class ScheduleResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'from' => $this['from'],
            'day' => $this['day'],
            'recruiting' => $this['recruiting'],
            'sort'=> $this['sort'],
        ];
    }
}
