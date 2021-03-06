<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix method can be used for the prefix of each
    | route in the administration panel. For example, you can change to 'admin'
    |
    */
    'prefix' => env('DASHBOARD_PREFIX', 'console'),

    /*
    |--------------------------------------------------------------------------
    | Application Currency
    |--------------------------------------------------------------------------
    |
    | This value is the default currency of your store. This value is used when the
    | orders price is given. Your can use it on your frontend
    |
    */
    'currency'  => env('CURRENCY_SYMBOL', 'XAF'),

    /*
    |--------------------------------------------------------------------------
    | Shopper Resource
    |--------------------------------------------------------------------------
    |
    | Automatically connect the stored links. For example js and css files
    |
    */
    'resource' => [
        'stylesheets' => [],
        'scripts'     => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Provide a convenient mechanism for filtering HTTP
    | requests entering your application.
    |
    */
    'middleware' => [
        'public'  => ['public', 'web', 'localizationRedirect'],
        'private' => ['web', 'dashboard', 'localizationRedirect'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resource storage
    |--------------------------------------------------------------------------
    |
    | Specifies the configuration for resource storage, such as media and
    | upload files. These resources are used:
    |
    | media   - generated by the media manager.
    | uploads - generated by attachment model relationships.
    |
    */
    'storage' => [

        'uploads' => [
            'disk'   => 'local',
            'folder' => 'uploads',
            'path'   => storage_path('app/uploads'),
        ],

        'media' => [
            'disk'   => 'local',
            'folder' => 'media',
            'path'   => storage_path('app/media'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Image resize
    |--------------------------------------------------------------------------
    |
    | Resize and create thumbnails for previewImage on Brand, Category and Product
    | Model.
    |
    */
    'quality' => 70,
    'upsize'  => true,
    'thumbnails' => [
        [
            'name'  => 'medium',
            'scale' => '50'
        ],
        [
            'name'  => 'small',
            'scale' => '25'
        ],
        [
            'name' => 'cropped',
            'crop' => [
                'brand' => [
                    '145x50'  => ['width'  => '145', 'height' => '50']
                ],
                'product' => [
                    '1000x1000' => ['width'  => '1000', 'height' => '1000']
                ],
                'category' => [
                    '220x197' => ['width'  => '220', 'height' => '197']
                ]
            ]
        ]
    ],

];
