<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Backend Configuration
    |--------------------------------------------------------------------------
    */

    'title' => 'Administration',
    'menus' => [
        'sidebar' => [
            'name' => 'Administration',
            'items' => [
                'dashboard' => [
                    'name' => 'Dashboard',
                    'icon' => 'speedometer',
                    'route' => 'admin.dashboard'
                ],
                //'uniqueName' => [
                //    'name' => 'displayName',
                //    'icon' => 'bootstrapIcon',
                //    'route' => 'admin.resourceName',
                //    'resource' => true
                //    'badge' => 'nameOfModel'
                //]
            ]

        ],
    ]
];
