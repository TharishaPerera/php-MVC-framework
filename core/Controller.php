<?php


namespace app\core;


/**
 * Class Controller
 * @package app\core
 */
class Controller
{
    public static string $layout = 'main';

    public static function setLayout($layout)
    {
        Controller::$layout = $layout;
    }
    public static function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}