<?php

namespace App\Actions;

use Illuminate\Http\Resources\MissingValue;

class OrderPriceAction
{
public function __invoke($price)
{
    if($price->isNotEmpty()) {
        if (in_array($price->first()->name, ['Единоразовый абонемент', 'Одноразовий абонемент', 'Разове тренування', 'Разовая тренировка'])) {
            $singl = $price->first();
            $price->push($singl);
            $price->forget(0);
            $price->values();
        }
        if($price->count()>2) {
            if (in_array($price[1]->name, ['Единоразовый абонемент', 'Одноразовий абонемент', 'Разове тренування', 'Разовая тренировка'])) {
                $singl = $price[1];
                $price->push($singl);
                $price->forget(1);

            }
        }
        if (in_array($price->first()->name, ['Призупинення абонементу (2 тижні)', 'Приостановка абонемента (2 недели)'])) {
            $singl = $price->first();
            $price->push($singl);
            $price->forget(0);
            $price->values();
        }
        return $price;
    }
    else{
        return new MissingValue ;
    }
}
}
