<?php

namespace App\Nova\Settings;

use Laravel\Nova\Fields\Boolean;
use Stepanenko3\NovaSettings\Types\AbstractType;

class GlobalSetting extends AbstractType
{
    public function fields(): array
    {
        return [
            Boolean::make('Param 1', 'param_1'),
            Boolean::make('Param 2', 'param_2'),
            Boolean::make('Param 3', 'param_3'),
        ];
    }
}
