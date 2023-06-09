<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Vet extends Model implements Sortable
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
