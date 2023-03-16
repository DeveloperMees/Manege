<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Facility;

class FacilityRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleFiles;

    public function __construct(Facility $model)
    {
        $this->model = $model;
    }
}
