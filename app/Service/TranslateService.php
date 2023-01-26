<?php

namespace App\Service;

use App\Models\Blog;
use App\Models\Club;
use App\Models\Coach;
use App\Models\Page;
use App\Models\Price;
use App\Models\PriceCategory;
use App\Models\Promo;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Specialization;
use App\Models\Tag;

class TranslateService
{

    public function run($model, array $field)
    {
        foreach ($model->get() as $item) {
            foreach ($field as $f) {
                $item->{$f} = [
                    'uk' => $item->{$f},
                    'ru' => $item->{$f},
                ];

            }
            $item->save();

        }
    }

    public function make()
    {
        $list_model = [
//            ['model' => Club::query(), 'field' => ['name', 'address']],
//            ['model' => Coach::query(), 'field' => ['name', 'title', 'description']],
//            ['model' => Page::query(), 'field' => ['name', 'text']],
//            ['model' => Price::query(), 'field' => ['name','comment']],
//            ['model' => PriceCategory::query(), 'field' => ['name','comment']],
            ['model' => Promo::query(), 'field' => ['title', 'sub_title', 'mobile_title', 'description']],
//            ['model' => Service::query(), 'field' => ['name']],
//            ['model' => Specialization::query(), 'field' => ['name']],
//            ['model' => Tag::query(), 'field' => ['name']],
//            ['model' => Blog::query(), 'field' => ['title', 'description']],
        ];

        foreach ($list_model as $item) {

            $this->run($item['model'], $item['field']);
        }
    }
}
