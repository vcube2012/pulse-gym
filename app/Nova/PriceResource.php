<?php

namespace App\Nova;

use App\Models\Price;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Spatie\NovaTranslatable\Translatable;

class PriceResource extends Resource
{
    public static $model = Price::class;

    public static $title = 'name';
    public static $displayInNavigation = true;

    public static $search = [
        'id', 'name', 'price'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('PriceCategory','priceCategory',PriceCategoryResource::class,),
            Translatable::make([
                Text::make('Name')
                    ->sortable()
                    ->rules('required'),

                Text::make('Comment')
                    ->sortable()
                    ->rules('nullable'),
            ]),
            Text::make('Price')
                ->sortable()
                ->rules('required'),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
