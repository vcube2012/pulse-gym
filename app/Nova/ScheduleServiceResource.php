<?php

namespace App\Nova;

use App\Models\Schedule;
use App\Models\ScheduleService;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

class ScheduleServiceResource extends Resource
{
    public static $model = ScheduleService::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('from'),
            Select::make('day')->options(function (){
                return [
                    'Понедельник',
                    'Вторник',
                    'Среда',
                    'Четверг',
                    'Пятница',
                    'Субота',
                ];
            }),

            BelongsTo::make('schedule' , 'schedule' , ScheduleResource::class),
            BelongsTo::make('service' , 'service' , ServiceResource::class),
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
