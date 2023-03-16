<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Doctor;

class DoctorTranslation extends Model
{
    protected $baseModuleModel = Doctor::class;
}
