<?php

namespace App\Composers;

use App\Models\Page;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $pages = Page::where('published', 1)->orderBy('position', 'ASC')->get();
        $view->with([
            'pages' => $pages
        ]);
    }
}
