<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    public static function home()
    {
        $params = [
            'name' => 'Tharisha'
        ];
        return $this->render('home', $params);
    }

    public static function contact()
    {
        return $this->render('contact');
    }

    public static function handleContact()
    {
        return 'Handling Submitted Data';
    }
}