<?php

namespace App\Helpers\ClassHelper;

/**
 * Contain the path of all the views files related to posts.
 * Class PostPageHelper
 * @author Kevin Teasdale-Dubé
 * @package App\Helpers\ClassHelper
 */
class PostPageHelper {

    private const POSTS = 'posts/';
    const INDEX = self::POSTS . 'index';
    const SHOW = self::POSTS . 'show';
    const CREATE = self::POSTS . 'create';
    const EDIT = self::POSTS . 'edit';
}
