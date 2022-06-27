<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    public static function home()
    {
        $params = [
            'name' => 'Tharisha Imalka Perera'
        ];
        return Controller::render('home', $params);
    }

    public static function contact()
    {
        return Controller::render('contact');
    }

    public static function handleContact(Request $request)
    {
        $body =  $request->getBody();
        return 'Handling Submitted Data';
    }
}