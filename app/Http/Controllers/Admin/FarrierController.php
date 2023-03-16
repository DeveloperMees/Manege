<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class FarrierController extends BaseModuleController
{
    protected $moduleName = 'farriers';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
