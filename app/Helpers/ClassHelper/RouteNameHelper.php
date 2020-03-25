<?php

namespace App\Helpers\ClassHelper;

/**
 * Contain all the Routes Name to prevent routes issues related to the name.
 * Class RouteNameHelper
 * @author Kevin Teasdale-Dubé
 * @package App\Helpers\ClassHelper
 */
class RouteNameHelper {

    /* --- Statics pages --- */
    const HOME = 'home';
    const ABOUT = 'about';

    /* --- Post pages --- */
    const POST_INDEX = 'post_posts';
    const POST_SHOW = 'post_post';
    const POST_CREATE = 'post_create';
    const POST_UPDATE = 'post_update';
    const POST_EDIT = 'post_edit';
    const POST_DESTROY = 'post_destroy';
    const POST_STORE = 'post_store';
}
