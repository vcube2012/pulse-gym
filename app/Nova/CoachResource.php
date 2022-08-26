<?php

namespace App\Nova;

use App\Models\Coach;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Flexible;

class CoachResource extends Resource
{

    public static function label()
    {
        return 'Тренеры';
    }

    public static $model = Coach::class;

    public static $title = 'title';

    public static $search = [
        'id', 'name', 'image', 'description'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Title')
                ->sortable()
                ->rules('nullable'),

            Text::make('Image')
                ->sortable()
                ->rules('required'),

            Text::make('Description')
                ->sortable()
                ->rules('required'),

            Text::make('Phone')
                ->sortable()
                ->rules('nullable'),

            Flexible::make('social')->addLayout('Номер телефона', 'social', [
                Select::make('icon')->options(function (){
                    return [
                        'instagram' => 'instagram',
                        'facebook' => 'facebook',
                        'vk' => 'vk',
                    ];
                }),
                Text::make('url'),
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
