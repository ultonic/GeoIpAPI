<?php

$module = env('MODULE_GENERATOR');
$source = 'app/Modules/' . $module . '/';

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path($source .'database/migrations/'),

        'model'             => app_path($source.'Models/'),

        'datatables'        => app_path($source.'DataTables/'),

        'repository'        => app_path($source.'Repositories/'),

        'routes'            => base_path($source.'routes/web.php'),

        'api_routes'        => base_path($source.'routes/api.php'),

        'request'           => app_path($source.'Http/Requests/'),

        'api_request'       => app_path($source.'Http/Requests/API/'),

        'controller'        => app_path($source.'Http/Controllers/'),

        'api_controller'    => app_path($source.'Http/Controllers/API/'),

        'test_trait'        => base_path($source.'tests/traits/'),

        'repository_test'   => base_path($source.'tests/'),

        'api_test'          => base_path($source.'tests/'),

        'views'             => base_path($source.'resources/views/'),

        'schema_files'      => base_path($source.'resources/model_schemas/'),

        'templates_dir'     => base_path($source.'resources/infyom/infyom-generator-templates/'),

        'modelJs'           => base_path($source.'resources/assets/js/models/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'Modules\\' . $module .'\\Models',

        'datatables'        => 'Modules\\' . $module .'\\DataTables',

        'repository'        => 'Modules\\' . $module .'\\Repositories',

        'controller'        => 'Modules\\' . $module .'\\Http\Controllers',

        'api_controller'    => 'Modules\\' . $module .'\\Http\Controllers\API',

        'request'           => 'Modules\\' . $module .'\\Http\Requests',

        'api_request'       => 'Modules\\' . $module .'\\Http\Requests\API',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Eloquent',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    'api_version' => 'v1',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'softDelete' => true,

        'tables_searchable_default' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // using admin will create route('admin.?.index') type routes

        'path' => '',

        'view' => '',  // using backend will create return view('backend.?.index') type the backend views directory

        'public' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => false,

        'tests'         => true,

        'datatables'    => false,

        'menu'          => [

            'enabled'       => true,

            'menu_file'     => 'layouts/menu.blade.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    'ignore_model_prefix' => false,

];
