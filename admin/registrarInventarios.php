<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child's Play</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registrarInventarios.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="../img/logoH.png" alt="logo" width="150" style="margin-right: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <span class="navbar-toggler-icon" style="background-color:white;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.html" style="color:white;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-light" style="border-bottom: 1px solid rgb(233, 233, 233); background-color: rgb(255, 255, 255);">
        <a class="navbar-brand" style="color:#e63378;">Inventarios / Generar Inventario</a>
        <button type="button" class="btn btn-info"><a href="inventario.php" style="color:white; text-decoration:none;">Atrás</a></button>
    </nav>

    <div class="alert alert-primary" role="alert">
        No olvides ingresar el código del nuevo inventario y tu id de usuario en el formulario inferior para que estos se registren exitosamente!
    </div>

    <div class="container-fluid ">
        <div class="container mt-5 mb-5 pt-4">
            <form method="POST" action="registrarInventarios.php" class="m-3">
                <p>Diligencia el formulario para generar un nuevo Inventario</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Código</label>
                        <input type="text" class="form-control" name="codigo">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Fecha</label>
                        <input type="date" class="form-control" name="fecha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Descripción</label>
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="boton">Generar</button>
            </form>
        </div>

        <div class="container mt-5 mb-5 pt-4">
            <form method="POST" action="registrarInventarios.php" class="m-3">
                <p>Diligencia el formulario para registrar completamente la generación del inventario</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Código</label>
                        <input type="text" class="form-control" name="idInventario">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <button type="submit" class="btn btn-success" name="boton2">Registrar</button>
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['boton'])) {
            include("../abrir_conexion.php");

            $codigo = $_POST['codigo'];
            $fecha = $_POST['fecha'];
            $descripcion = $_POST['descripcion'];

            $conexion->query("INSERT INTO $tabla3 (idInventario,fechaInventario,descripcion) values ('$codigo','$fecha','$descripcion')");

            echo '<script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "Generación exitosa",
                text: "El nuevo inventario fue generado correctamente!",
            });
            </script>';

            include("../cerrar_conexion.php");
        }
        if (isset($_POST['boton2'])) {
            include("../abrir_conexion.php");
            $inventario = $_POST['idInventario'];
            $autor = $_POST['usuario'];

            $conexion->query("INSERT INTO $tabla10 (idInv,idUsua) values ('$inventario','$autor')");

            echo '<script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "Generación exitosa",
                text: "Completaste con éxito la generación del nuevo formulario!",
            });
            </script>';
            include("../cerrar_conexion.php");
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>