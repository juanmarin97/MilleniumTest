<?php
include_once 'header.php';
include_once 'footer.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <title>Prueba Tecnica Millenium</title>
</head>

<body class="d-flex flex-column" style="min-height: 100vh">

    <!-- toast insertar -->
    <div class="toast" style="position: absolute; top: 20px; right: 10px;" data-autohide="true" data-delay="5000">
        <div class="toast-header">
            <img src="https://softwaremillenium.com/img/logo.png" class="rounded mr-2" alt="logo" width="100">
            <div class="row">
                <div class="col-12"><strong class="mr-auto">Mensaje</strong></div>
                <div class="col-12"><small id="mstime" class="text-muted"><time class="timeago" datetime=""></time></small></div>
            </div>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" id="toastMen">
        </div>
    </div>
    <!-- toast insertar -->

    <div class="container">
        <h1 class="mb-5">Crear usuarios</h1>
        <div class="modal-body rounded" style="background-color:086788;color:FFF1D0;font-size: 12pt;">
            <!-- <form name="formcreate"> -->
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="txtnombre">Nombre</label>
                        <input type="text" class="form-control" name="txtnombre" id="txtnombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="txtapellido">Apellido</label>
                        <input type="text" class="form-control" name="txtapellido" id="txtapellido" placeholder="Apellido">
                    </div>
                    <div class="text-center">
                        <button id="sendDatos" class="btn btn-success col-6">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/jquery.timeago.js"></script>
</body>

</html>
