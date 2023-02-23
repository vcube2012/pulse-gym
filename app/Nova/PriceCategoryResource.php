<?php

namespace App\Nova;

use App\Models\PriceCategory;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use NovaAttachMany\AttachMany;
use Spatie\NovaTranslatable\Translatable;

class PriceCategoryResource extends Resource
{
    public static $model = PriceCategory::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'color'
    ];
    public static function label()
    {
        return 'Цінові категорії';
    }
    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Order','order')
                ->sortable(),
            Translatable::make([
                Text::make('Name')
                    ->sortable()
                    ->rules('required'),

                Text::make('Comment')
                    ->sortable()
                    ->rules('nullable'),
            ]),
            Text::make('Color')
                ->sortable()
                ->rules('required'),
            HasMany::make('Prices', 'price', PriceResource::class),

            AttachMany::make('baners','baners',BanerResource::class),
           BelongsToMany::make('baners','baners',BanerResource::class)->display('type'),
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
