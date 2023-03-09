<?php

namespace App\Nova;

use App\Models\Page;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Spatie\NovaTranslatable\Translatable;

class PageResource extends Resource
{
    public static $model = Page::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];
    public static function label()
    {
        return 'Інформаційні сторінки';
    }
    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Translatable::make([
                Text::make('Назва','name'),
                Trix::make('Текст','text'),
                Textarea::make('Редактувати HTML','text'),
            ]),
            Translatable::make([
                Text::make('Slug')
                    ->sortable(),
            ]),
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
