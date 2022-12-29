<?php

namespace Controllers;

use MVC\Router;

class CitaController
{
    public static function index(Router $router)
    {

        // Comprobamos si el usuario está utenticado o no
        isAuth();

        $router->render('cita/index', [
            'id' => $_SESSION['id'],
            'nombre' => $_SESSION['nombre']
        ]);
    }
}
