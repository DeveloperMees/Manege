<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class HorseController extends ModuleController
{
    protected $moduleName = 'horses';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
