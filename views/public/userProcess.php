<?php
include_once '../../controllers/User.control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$user_obj = new UserController();

$nombre = isset($_POST['txtnombre']) ? $_POST['txtnombre'] : "";
$apellido = isset($_POST['txtapellido']) ? $_POST['txtapellido'] : "";

// Create an instance of object
$user = $user_obj->insertUser($nombre,$apellido);

if ($user) {
    echo '<div class="alert-success text-center">
            <strong>Usuario con nombre :' . $nombre . ' creado exitosamente</strong>
          </div>';
}

?>
</body>
</html>