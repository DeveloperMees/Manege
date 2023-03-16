<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\News;

class NewsController extends \App\Http\Controllers\Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $news = News::where('published', '=', 1)->get();

        return view('news.index', [
            'news' => $news
        ]);
    }

    public function show($name)
    {
        $news = News::whereHas('slugs', function ($q) use ($name) {
            $q->where('slug', '=', $name);
        })->first();

        if ($news != null) {
            return view('facilities.show', [
                'facility' => $news
            ]);
        } else {
            abort('404');
        }
    }

}
