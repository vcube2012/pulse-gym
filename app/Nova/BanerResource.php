<?php

namespace App\Nova;

use App\Models\Baner;
use App\Models\Club;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use NovaAttachMany\AttachMany;
use Spatie\NovaTranslatable\Translatable;

class BanerResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Baner>
     */
    public static $model = Baner::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];
    public static function label()
    {
        return 'Банери';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Назва','name'),
            Select::make('Тип банера','type')->options(function (){
                return [
                    'freeze' => 'Заморозка абонемента',
                    'two-free-training' => 'Два безплатних заняття с тренером',
                    'personal-coach'=>'Personal Coach',
                ];
            }),
            Text::make('slug'),
            Translatable::make([
                Text::make('Заголовок','title'),
                Text::make('Під-заголовок','sub_title'),
                Text::make('Заголовок для моб','mobile_title'),
                Text::make('Під-заголовок для моб','mobile_sub_title'),
            ]),
            AttachMany::make('clubs','clubs', ClubResource::class),
            BelongsToMany::make('clubs','clubs',ClubResource::class)->display('name'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
