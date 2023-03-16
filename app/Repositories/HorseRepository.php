<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Horse;

class HorseRepository extends ModuleRepository
{
    

    public function __construct(Horse $model)
    {
        $this->model = $model;
    }
}
