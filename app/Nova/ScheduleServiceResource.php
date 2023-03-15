<?php

namespace App\Nova;

use App\Models\Schedule;
use App\Models\ScheduleService;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Outl1ne\NovaSortable\Traits\HasSortableRows;

class ScheduleServiceResource extends Resource
{
    use HasSortableRows;

    public static $model = ScheduleService::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];
    public static $displayInNavigation = false;

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('from'),
            Select::make('day')->options(function () {
                return [
                    'Понедельник',
                    'Вторник',
                    'Среда',
                    'Четверг',
                    'Пятница',
                    'Субота',
                ];
            }),

            BelongsTo::make('schedule', 'schedule', ScheduleResource::class),
            BelongsTo::make('service', 'service', ServiceResource::class),
            Boolean::make('recruiting', 'recruiting')->default(true),
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
