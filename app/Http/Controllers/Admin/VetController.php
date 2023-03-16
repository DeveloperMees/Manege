<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class VetController extends BaseModuleController
{
    protected $moduleName = 'vets';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
