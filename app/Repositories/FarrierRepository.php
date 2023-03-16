<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Farrier;

class FarrierRepository extends ModuleRepository
{
    

    public function __construct(Farrier $model)
    {
        $this->model = $model;
    }
}
