<?php

namespace App\Nova;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Outl1ne\NovaSortable\Traits\HasSortableRows;

class TagResource extends Resource
{
    use HasSortableRows;
    public static $model = Tag::class;

    public static $title = 'name';

    public static $search = [
        'id', 'slug', 'name'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Slug')
                ->sortable()
                ->rules('required'),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            BelongsToMany::make('blogs', 'blogs', BlogResource::class),
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
