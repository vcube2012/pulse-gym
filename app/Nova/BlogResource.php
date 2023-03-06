<?php

namespace App\Nova;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Spatie\NovaTranslatable\Translatable;

class BlogResource extends Resource
{
    public static $model = Blog::class;

    public static $title = 'title';

    public static $search = [
        'id', 'slug', 'title', 'image', 'description'
    ];
    public static function label()
    {
        return 'Пости';
    }
    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Slug')
                ->sortable(),
            Translatable::make([
                Text::make('Title')
                    ->sortable()
                    ->rules('required'),

                Trix::make('Description')
                    ->sortable()
                    ->rules('required'),
            ]),

            Image::make('Image', 'image')
                ->sortable(),
            BelongsToMany::make('Tags', 'tags', TagResource::class),
//            MorphOne::make('MetaData','seo',SeoResource::class),
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
