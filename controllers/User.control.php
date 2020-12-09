<?php
$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/models/User.class.php';

class UserController
{
    public function insertUser($nombre, $apellido)
    {
        $user_obj= new User($nombre,$apellido);
        $user = $user_obj->insert_user();
        return $user;
    }
}
