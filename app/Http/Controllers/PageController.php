<?php

namespace App\Http\Controllers;

use App\Helpers\ClassHelper\StaticPageHelper;

/**
 * Manage all the statics pages that doesn't need to interact with the Database.
 * Class PageController
 * @author Kevin Teasdale-Dubé
 * @package App\Http\Controllers
 */
class PageController extends Controller {

    /**
     * Return the Home view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        return view(StaticPageHelper::HOME);
    }

    /**
     * Return the About view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about() {
        return view(StaticPageHelper::ABOUT);
    }
}
