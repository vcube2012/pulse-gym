<?php

namespace App\Nova;

use App\Models\Service;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Spatie\NovaTranslatable\Translatable;

class ServiceResource extends Resource
{
    public static $model = Service::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name'
    ];
public static function label()
{
    return 'Послуги';
}

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Translatable::make([
                Text::make('Name')
                    ->sortable()
                    ->rules('required'),
            ]),
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
