<?php

namespace App\Service;

use App\Models\Schedule;

class TranslateService
{

    public function run($model, array $field)
    {
        foreach ($model->get() as $item) {
            foreach ($field as $f) {
                $item->{$f} = [
                    'ua' => $item->{$f},
                    'ru' => $item->{$f},
                ];
            }
            $item->save();
        }
    }

    public function make()
    {
        $list_model = [
            ['model' => Schedule::query(), 'field' => ['title']]
        ];

        foreach ($list_model as $item) {
            $this->run($item['model'], $item['field']);
        }
    }
}
