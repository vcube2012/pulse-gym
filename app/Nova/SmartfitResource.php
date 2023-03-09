<?php

namespace App\Nova;

use App\Models\Smartfit;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use NovaAttachMany\AttachMany;
use Spatie\NovaTranslatable\Translatable;
use Whitecube\NovaFlexibleContent\Flexible;

class SmartfitResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var \App\Models\Smartfit
     */
    public static $model = Smartfit::class;

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
    return 'Реабілітаційний центр';
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

            Translatable::make([
                Text::make('Slug')
                    ->sortable(),
            ]),
            Translatable::make([
                Text::make('Name')
                    ->sortable()
                    ->rules('required'),
                Text::make('Top title','top_title')
                    ->sortable()
                    ->rules('required'),

                Trix::make('text')
                    ->rules('required'),

                Text::make('Preview sub-Title','sub_title')
                    ->sortable()
                    ->rules('required'),
                Text::make('Preview description','description')
                    ->sortable()
                    ->rules('required'),
                Text::make('Preview features','features')
                    ->sortable()
                    ->rules('required'),
            ]),
            Text::make('Preview Title','title')
                ->sortable()
                ->rules('required'),
            Image::make('image','image'),
            Translatable::make([
                Text::make('Address')
                    ->sortable()
                    ->rules('required'),
            ]),

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

            AttachMany::make('coaches', 'coaches' , CoachResource::class)->display('name'),
            BelongsToMany::make('coaches', 'coaches' , CoachResource::class),

            Images::make('Main image', 'my_multi_collection')
                ->conversionOnDetailView('thumb')
                ->conversionOnIndexView('thumb')
                ->conversionOnForm('thumb')
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
