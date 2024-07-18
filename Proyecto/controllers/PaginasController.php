<?php

namespace Controllers;

use MVC\Router;

class PaginasController
{
    public static function index(Router $router)
    {
        $inicio = true;
        $router->render("paginas/index", ['inicio'=>$inicio]);
    }

    public static function nosotros(Router $router)
    {
        $router->render("paginas/nosotros", []);
    }

    public static function propiedades(Router $router)
    {
        $router->render("paginas/propiedades", []);
    }
}