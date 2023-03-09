<?php

namespace App\Nova;

use App\Models\Club;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use NovaAttachMany\AttachMany;
use Spatie\NovaTranslatable\Translatable;
use Whitecube\NovaFlexibleContent\Flexible;

class ClubResource extends Resource
{
    public static $model = Club::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'address'
    ];
    public static function label()
    {
        return 'Клуби';
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

            Translatable::make([
                Text::make('Slug')
                    ->sortable(),
            ]),
            Translatable::make([
                Text::make('Address')
                    ->sortable()
                    ->rules('required'),
            ]),
            Boolean::make('New','new'),
            Boolean::make('Тимчасово не працює','no_working'),

            Image::make('image','image'),
            Image::make('image_bar','image_bar'),

            Text::make('Lat')
                ->sortable()
                ->rules('nullable'),

            Text::make('Lng')
                ->sortable()
                ->rules('nullable'),
            Translatable::make([
                Text::make('scheduler')->nullable(),
            ]),
            Flexible::make('phone')->addLayout('Номер телефона', 'phone', [
                Text::make('phone'),
            ]),
            Date::make('Дата створення','created_at'),
            HasMany::make('feedback' , 'feedback' , FeedbackResource::class),

            HasMany::make('prices' , 'prices' , PriceResource::class),

            AttachMany::make('price_category', 'price' , PriceCategoryResource::class),
            BelongsToMany::make('price_category', 'price' , PriceCategoryResource::class),

            AttachMany::make('coaches', 'coaches' , CoachResource::class),
            BelongsToMany::make('coaches', 'coaches' , CoachResource::class)->display('name'),

            AttachMany::make('services', 'services' , ServiceResource::class)->display('name'),
            BelongsToMany::make('services', 'services' , ServiceResource::class),

//            MorphOne::make('MetaData','seo',SeoResource::class),
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
