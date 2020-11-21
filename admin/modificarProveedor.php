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
                    <a class="nav-link" href="inventario.php">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proveedores.php">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="facturas.php">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-light" style="border-bottom: 1px solid rgb(233, 233, 233); background-color: rgb(255, 255, 255);">
        <a class="navbar-brand" style="color:#e63378;">Proveedores / Modificar Proveedor</a>
        <button type="button" class="btn btn-info"><a href="proveedores.php" style="color:white; text-decoration:none;">Atrás</a></button>
    </nav>

    <div class="container-fluid ">
        <div class="container mt-5 mb-5 pt-4">
            <form method="POST" action="modificarProveedor.php" class="m-3">
                <p>Diligencia el formulario para buscar el proveedor que deseas actualizar</p>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Código del proveedor</label>
                        <input type="text" class="form-control" name="codigo">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="boton">Buscar</button>
            </form>

            <?php
            if (isset($_POST['boton'])) {
                include("../abrir_conexion.php");

                $codigo = $_POST['codigo'];

                if ($codigo == "") {
                    echo '<script type="text/javascript">
                    Swal.fire({
                    icon: "error",
                    title: "No se consulto ningún proveedor",
                    text: "Por favor digita el código de un proveedor",
                    });
                    </script>';
                } else {

                    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla7 WHERE idProveedor = $codigo");

                    while ($consulta = mysqli_fetch_array($resultados)) {
                        echo '
                        <form method="POST" action="modificarProveedor.php" class="m-3">
                            <table class="table table-bordered mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">Código proveedor</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Fecha de entrada</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" value=' . $consulta['idProveedor'] . ' name="codigo" style="width:100%"></td>
                                        <td><input type="text" value=' . $consulta['nomProveedor'] . ' name="nombre" style="width:100%"></td>
                                        <td><input type="text" value=' . $consulta['correoProveedor'] . ' name="correo" style="width:100%"></td>
                                        <td><input type="text" value=' . $consulta['telProveedor'] . ' name="telefono" style="width:100%"></td>
                                        <td><input type="text" value=' . $consulta['direccionProveedor'] . ' name="direccion" style="width:100%"></td>
                                        <td><input type="text" value=' . $consulta['fechaEntrada'] . ' name="fecha" style="width:100%"></td>
                                    </tr>
                                </tbody>
                            </table> 
                            <button type="submit" class="btn btn-success" name="boton2">Modificar</button>                       
                        </form>
                    ';
                    }
                }
                include("../cerrar_conexion.php");
            }

            if (isset($_POST['boton2'])) {

                include("../abrir_conexion.php");

                $codigo = $_POST['codigo'];
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $telefono = $_POST['telefono'];
                $direccion = $_POST['direccion'];
                $fecha = $_POST['fecha'];

                $conexion->query("UPDATE $tabla7 SET correoProveedor='$correo', telProveedor='$telefono', direccionProveedor='$direccion', fechaEntrada='$fecha' WHERE idProveedor=$codigo");

                echo '
                <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "¡Proveedor modificado!",
                    text: "Los datos han sido modificados correctamente",
                });
                </script>';

                include("../cerrar_conexion.php");
            }
            ?>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>