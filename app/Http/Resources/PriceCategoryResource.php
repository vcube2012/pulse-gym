<?php

namespace App\Http\Resources;

use App\Actions\ClubsIdAction;
use App\Actions\OrderPriceAction;
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
        $action = new ClubsIdAction();
        $actionOrder = new OrderPriceAction();
        $id = $this->getOriginal('pivot_club_id');
        return [
            'id' => $this->id,
            'order' => $this->order,
            'name' => $this->name,
            'color' => $this->color,
            'new' => $this->new,
            'actia' => $this->actia,
            'comment' => $this->comment,
            'price' => PriceResource::collection($actionOrder($this->priceByClubId($id)->orderBy('price', 'asc')->get())),
            'baner' => BanerResource::collection($this->whenLoaded('baners', function () use ($id, $action) {
                return $this->baners->filter(function ($value, $key) use ($id, $action) {
                    return in_array($id, $action($value->clubs()->select('id')->get()));
                });
            })),
        ];
    }
}
