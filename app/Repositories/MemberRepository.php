<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Member;

class MemberRepository extends ModuleRepository
{
    use HandleFiles;

    public function __construct(Member $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'horses', 'Horse', 'horse');
//        $this->updateRepeater($object, $fields, 'doctors', 'Doctor', 'doctor');
        $this->updateRepeater($object, $fields, 'vets', 'Vet', 'vet');
        $this->updateRepeater($object, $fields, 'farriers', 'Farrier', 'farrier');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'horses', 'Horse', 'horse');
//        $fields = $this->getFormFieldsForRepeater($object, $fields, 'doctors', 'Doctor', 'doctor');
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'vets', 'Vet', 'vet');
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'farriers', 'Farrier', 'farrier');
        return $fields;
    }

    public function filter($query, array $scopes = [])
    {
//        $query->where('published', '=', '1');
        return parent::filter($query, $scopes); // TODO: Change the autogenerated stub
    }
}