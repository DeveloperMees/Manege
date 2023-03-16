<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Model;

class Farrier extends Model
{
    use HasPosition;

    protected $fillable = [
        'published',
        'name',
        'phone',
        'member_id',
        'position',
    ];

}
