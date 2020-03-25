<?php

namespace App\Helpers\ClassHelper;

/**
 * Contain the path of all the views files related to statics pages.
 * Class StaticPageHelper
 * @author Kevin Teasdale-Dubé
 * @package App\Helpers\ClassHelper
 */
class StaticPageHelper {

    private const STATIC= 'statics/';
    const HOME = self::STATIC . 'home';
    const ABOUT = self::STATIC . 'about';
}
