<?php

namespace App\Nova;

use App\Models\Club;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;

class ScheduleResource extends Resource
{
    public static function label()
    {
        return 'Графіки';
    }

    public static $model = Schedule::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('club' , 'club', ClubResource::class),
            HasMany::make('schedule' , 'schedule' , ScheduleServiceResource::class)
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
