<?php

namespace App\Nova;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class BlogResource extends Resource
{
    public static $model = Blog::class;

    public static $title = 'title';

    public static $search = [
        'id', 'slug', 'title', 'image', 'description'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Slug')
                ->sortable()
                ->rules('required'),

            Text::make('Title')
                ->sortable()
                ->rules('required'),

            Text::make('Image')
                ->sortable()
                ->rules('required'),

            Text::make('Description')
                ->sortable()
                ->rules('required'),

            BelongsToMany::make('Tags', 'tags', TagResource::class),
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
