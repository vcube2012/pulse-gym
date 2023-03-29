<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | Path to the JSON file where settings are stored.
    |
    */

    'path' => storage_path('app/settings.json'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Label
    |--------------------------------------------------------------------------
    |
    | The text that Nova displays for this tool in the navigation sidebar.
    |
    */

    'sidebar-label' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The browser/meta page title for the tool.
    |
    */

    'title' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | The good stuff :). Each setting defined here will render a field in the
    | tool. The only required key is `key`, other available keys include `type`,
    | `label`, `help`, `placeholder`, `language`, and `panel`.
    |
    */

    'settings' => [

        [
            'key' => 'email',
            'label' => 'Email',
            'panel' => 'Social',
        ],

        [
            'key' => 'facebook',
            'label' => 'Facebook',
            'panel' => 'Social',
        ],

        [
            'key' => 'schedule_ua',
            'label' => 'Режим работы: (ua)',
            'panel' => 'Social',
            'language' => 'uk',
        ],

        [
            'key' => 'schedule_ru',
            'label' => 'Режим работы: (ru)',
            'panel' => 'Social',
            'language' => 'ru',
        ],
        [
            'key' => 'api_key',
            'label' => 'Google Maps',
            'panel' => 'Social',
        ],
    ],

];
