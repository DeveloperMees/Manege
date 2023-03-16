<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Horse extends Model implements Sortable
{
    use HasPosition;

    protected $fillable = [
        'published',
        'name',
        'gender',
        'ubn',
        'date-birth',
        'member_id',
        'position',
    ];

}
