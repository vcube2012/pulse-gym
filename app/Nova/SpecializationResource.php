<?php

namespace App\Nova;

use App\Models\Specialization;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class SpecializationResource extends Resource
{
    public static function label()
    {
        return "Специализация";
    }

    public static $model = Specialization::class;

    public static $title = 'name';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('name')
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
