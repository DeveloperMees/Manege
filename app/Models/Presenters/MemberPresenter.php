<?php

namespace App\Models\Presenters;

class MemberPresenter extends Presenter
{
    public function farriersAsString()
    {
        return $this->farriers
            ->map(function ($farrier) {
                return $farrier->name;
            })
            ->implode('<br><br>');
    }

    public function vetsAsString()
    {
        return $this->vets
            ->map(function ($vet) {
                return $vet->name;
            })
            ->implode('<br><br>');
    }

    public function horsesAsString()
    {
        return $this->horses
            ->map(function ($doctor) {
                return $doctor->name;
            })
            ->implode('<br><br>');
    }

    public function projectsFormatted()
    {
        $creditList = [];

        foreach ($this->credits as $credit) {
            $creditList[] =
                '<strong>' . $credit->title . '</strong>  - <a class="text-twill-purple" href="/projects/' . $credit->project->slug . '">' . $credit->project->title . '</a>';
        }

        return $creditList;
    }
}
