<?php

namespace App\Nova;

use App\Models\Club;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use NovaAttachMany\AttachMany;
use Whitecube\NovaFlexibleContent\Flexible;

class ClubResource extends Resource
{
    public static $model = Club::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'address'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),
            Text::make('slug'),

            Text::make('Address')
                ->sortable()
                ->rules('required'),
            Text::make('image')
                ->rules('required'),

            Text::make('Lat')
                ->sortable()
                ->rules('nullable'),

            Text::make('Lng')
                ->sortable()
                ->rules('nullable'),
            Text::make('scheduler')->nullable(),
            Flexible::make('phone')->addLayout('Номер телефона', 'phone', [
                Text::make('phone'),
            ]),
            HasMany::make('feedback' , 'feedback' , FeedbackResource::class),

            AttachMany::make('price_category', 'price' , PriceCategoryResource::class),
            BelongsToMany::make('price_category', 'price' , PriceCategoryResource::class),

            AttachMany::make('coaches', 'coaches' , CoachResource::class),
            BelongsToMany::make('coaches', 'coaches' , CoachResource::class),

//            AttachMany::make('schedule', 'schedule' , ScheduleResource::class),
//            BelongsToMany::make('schedule', 'schedule' , ScheduleResource::class),

            Images::make('Main image', 'my_multi_collection')
                ->conversionOnDetailView('thumb')
                ->conversionOnIndexView('thumb')
                 ->conversionOnForm('thumb')
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
