<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Flash Levels
    |--------------------------------------------------------------------------
    |
    | This section specifies the levels at which messages can be flashed. These
    | levels provide the flexibility of specifying an icon and separate colors
    | for each type of element, namely background, title and body colors.
    |
    | The default styles are based on the Tailwind UI "Alert" components, see:
    | - https://tailwindui.com/components/application-ui/feedback/alerts
    |
    | The default icons are based on Heroicons and Blade UI Kit, see:\
    | - https://heroicons.com/
    | - https://github.com/blade-ui-kit/blade-heroicons
    |
    */

    'levels' => [

        'error' => [
            'icon' => [
                'name'       => 'heroicon-m-x-circle',
                'class'      => 'h-5 w-5 text-red-400',
                'attributes' => [],
            ],
            'classes' => [
                'background' => 'bg-red-50',
                'title'      => 'text-red-800',
                'body'       => 'text-red-700',
            ],
        ],

        'info' => [
            'icon' => [
                'name'       => 'heroicon-m-information-circle',
                'class'      => 'h-5 w-5 text-blue-400',
                'attributes' => [],
            ],
            'classes' => [
                'background' => 'bg-blue-50',
                'title'      => 'text-blue-800',
                'body'       => 'text-blue-700',
            ],
        ],

        'success' => [
            'icon' => [
                'name'       => 'heroicon-m-check-circle',
                'class'      => 'h-5 w-5 text-green-400',
                'attributes' => [],
            ],
            'classes' => [
                'background' => 'bg-green-50',
                'title'      => 'text-green-800',
                'body'       => 'text-green-700',
            ],
        ],

        'warning' => [
            'icon' => [
                'name'       => 'heroicon-m-exclamation-circle',
                'class'      => 'h-5 w-5 text-yellow-400',
                'attributes' => [],
            ],
            'classes' => [
                'background' => 'bg-yellow-50',
                'title'      => 'text-yellow-800',
                'body'       => 'text-yellow-700',
            ],
        ],

    ],

];
