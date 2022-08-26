<?php

namespace App\Nova;

use App\Models\PriceCategory;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class PriceCategoryResource extends Resource
{
    public static $model = PriceCategory::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'color'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Color')
                ->sortable()
                ->rules('required'),

            Text::make('Comment')
                ->sortable()
                ->rules('nullable'),

            HasMany::make('Prices', 'price', PriceResource::class),
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
