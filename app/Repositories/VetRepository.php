<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Vet;

class VetRepository extends ModuleRepository
{
    

    public function __construct(Vet $model)
    {
        $this->model = $model;
    }
}
