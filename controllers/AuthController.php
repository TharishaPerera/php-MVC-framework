<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public static function login()
    {
        Controller::setLayout('auth');
        return Controller::render('login');
    }

    public static function register(Request $request)
    {
        if ($request->isPost()){
            return 'handle submitted data';
        }
        Controller::setLayout('auth');
        return Controller::render('register');
    }
}