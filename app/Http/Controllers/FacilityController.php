<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends \App\Http\Controllers\Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facilities()
    {
        $facilities = Facility::where('published', '=', 1)->get();

        return view('facilities.index', [
            'facilities' => $facilities
        ]);
    }

    public function show($name)
    {
        $facility = Facility::whereHas('slugs', function ($q) use ($name) {
            $q->where('slug', '=', $name);
        })->first();

        if ($facility != null) {
            return view('facilities.show', [
                'facility' => $facility
            ]);
        } else {
            abort('404');
        }
    }

}
