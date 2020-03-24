<?php

namespace App\Http\Controllers;

use App\Helpers\ClassHelper\StaticPageHelper;
use Illuminate\Http\Request;

/**
 * Manage all the statics pages that doesn't need to interact with the Database.
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller {

    public function home() {
        return view(StaticPageHelper::HOME);
    }

    public function about() {
        return view(StaticPageHelper::ABOUT);
    }
}
