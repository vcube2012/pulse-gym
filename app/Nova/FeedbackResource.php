<?php

namespace App\Nova;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class FeedbackResource extends Resource
{
    public static $model = Feedback::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'email', 'feedback'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254'),

            Text::make('Feedback')
                ->sortable()
                ->rules('required'),

            Text::make('Answer')
                ->sortable()
                ->rules('nullable'),

            Date::make('Created At','created_at')
                ->sortable(),
            Boolean::make('Is active','active'),

//            BelongsTo::make('club' , 'club' , ClubResource::class)
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
