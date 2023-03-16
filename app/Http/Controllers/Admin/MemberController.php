<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class MemberController extends ModuleController
{
    protected $moduleName = 'members';


    protected function getIndexTableMainFilters($items, $scopes = [])
    {

    }

    protected $perPage = 60;

    /**
     * Name of the index column to use as name column.
     *
     * @var string
     */
    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'permalink' => false
    ];

    protected
        $indexColumns = [
        'name' => [
            // field column
            'title' => 'Name',
            'field' => 'name',
            'sort' => false
        ],

        'phone' => [
            // field column
            'title' => 'Telefoon',
            'field' => 'phone',
            'sort' => false
        ],

        'farriersAsString' => [
            'title' => 'Hoefsmid',
            'field' => 'farriersAsString',
            'present' => true
        ],

        'vetsAsString' => [
            'title' => 'Dierenarts',
            'field' => 'farriersAsString',
            'present' => true
        ],

        'horsesAsString' => [
            'title' => 'Paard',
            'field' => 'horsesAsString',
            'present' => true
        ]
    ];

}
