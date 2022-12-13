<?php

namespace Controllers;

use MVC\Router;
use Classes\Email;
use Model\Usuario;

class LoginController
{
    public static function login(Router $router)
    {
        $router->render('auth/login');
    }

    public static function logout()
    {
        echo "Desde logout";
    }

    public static function olvide(Router $router)
    {
        $router->render('auth/olvide-password', []);
    }

    public static function recuperar()
    {
        echo "Desde recuperar";
    }

    public static function crear(Router $router)
    {
        $usuario = new Usuario;

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            // Revisar que alertas esté vacío
            if (empty($aleras)) {
                // Verificar que el usuario no este registrado
                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Hasheamos el password
                    $usuario->hashPassword();

                    // Generar token único
                    $usuario->crearToken();

                    // Enviar el email
                    $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                    debuguear($email);
                    $email->enviarConfirmacion();
                    /* $alertas['exito'][] = 'Cuenta creada correctamente'; */
                }
            }
        }

        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            "alertas" => $alertas
        ]);
    }
}
