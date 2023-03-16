<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class HeaderController extends ModuleController
{
    protected $moduleName = 'headers';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
