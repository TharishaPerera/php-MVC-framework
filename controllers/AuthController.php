<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public static function login()
    {
        Controller::setLayout('auth');
        return Controller::render('login');
    }

    public static function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()){
            $registerModel->loadData($request->getBody());

            echo '<pre>';
            var_dump($registerModel);
            echo '</pre>';
            exit;

            if ($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }

            return Controller::render('register', [
                'model' => $registerModel
            ]);
        }
        Controller::setLayout('auth');
        return Controller::render('register', [
            'model' => $registerModel
        ]);
    }
}