<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;
use App\Models\Presenters\MemberPresenter;

class Member extends Model
{
    use HasFiles;

    public $presenterAdmin = MemberPresenter::class;

    protected $fillable = [
        'published',
        'queue',
        'name',
        'street',
        'zipcode',
        'place',
        'phone',
        'email',
    ];

    public function horses()
    {
        return $this->hasMany(Horse::class)->orderBy('position');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class)->orderBy('position');
    }

    public function vets()
    {
        return $this->hasMany(Vet::class)->orderBy('position');
    }

    public function farriers()
    {
        return $this->hasMany(Farrier::class)->orderBy('position');
    }
}
