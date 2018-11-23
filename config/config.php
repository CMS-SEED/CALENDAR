<?php

return [

    /**
     * Provider.
     */
    'provider' => 'cms_framework_seed',

    /*
     * Package.
     */
    'package'  => 'calendar',

    /*
     * Modules.
     */
    'modules'  => ['calendar'],

    'calendar' => [
        'model'         => 'Cms_Framework_Seed\Calendar\Models\Calendar',
        'table'         => 'calendars',
        'presenter'     => \Cms_Framework_Seed\Calendar\Repositories\Presenter\CalendarItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'title'],
        'dates'         => ['start', 'end', 'deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'user_type', 'category_id', 'status', 'start', 'end', 'location', 'color', 'title', 'details', 'created_by', 'upload_folder'],
        'translatables' => [],

        'upload_folder' => 'calendar/calendar',
        'uploads'       => [],
        'casts'         => [
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'status',
        ],
    ],
];
