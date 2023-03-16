<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Header;

class HeaderRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Header $model)
    {
        $this->model = $model;
    }
}
