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
    <link rel="stylesheet" href="Css/inventario.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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

    <div class="container mt-5 mb-5 pt-4">
        <h2 class="titulo pb-4">Inventarios actuales</h2>
        <nav class="navbar navbar-light bg-light navbarD">
            <a class="navbar-brand" href="#">Herramientas</a>
            <ul class="list-group list-group-horizontal">
                <button type="button" class="btn btn-success mr-4"><a href="registrarInventarios.php" style="color:white; text-decoration:none;">Generar nuevo Inventario</a></button>
                <button type="button" class="btn btn-danger mr-4" data-toggle="modal" data-target="#eliminarModal">
                    Eliminar Inventario
                </button>
                <button type="button" class="btn btn-info mr-4"><a href="modificarInventario.php" style="color:white; text-decoration:none;">Modificar Inventario</a></button>
            </ul>
        </nav>

        <!-- Modal Eliminar inventario -->
        <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar inventario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Digita el código del inventario que desees eliminar</label>
                                <input type="text" class="form-control" name="codigo">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="boton2">Eliminar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <form class="form-inline pt-4 pb-4" method="POST">
                <div class="form-group mb-2">
                    <label>Consulta la información del administrador que generó un inventario. Ingresa el Id del inventario</label>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="codigo" placeholder="Id del inventario" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="boton">Consultar</button>
            </form>
        </div>

        <div class="alert alert-primary" role="alert">
            Cuando elimines un registro recuerda actualizar la tabla de datos!!!
        </div>

        <button type="submit" class="btn btn-secondary mb-4" onclick="location.reload()">Actualizar tabla de datos </button>

        <table class='table table-bordered' style="margin-bottom:35px;">
            <thead>
                <tr>
                    <th scope='col'>Código</th>
                    <th scope='col'>Fecha</th>
                    <th scope='col'>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../abrir_conexion.php");
                $resultados = mysqli_query($conexion, "SELECT * FROM $tabla3");
                while ($consulta = mysqli_fetch_array($resultados)) {
                    echo "
                  <tr>
                    <th>" . $consulta['idInventario'] . "</th>
                    <td>" . $consulta['fechaInventario'] . "</td>
                    <td>" . $consulta['descripcion'] . "</td>
                  </tr>
                ";
                }
                if (isset($_POST['boton'])) {

                    $codigo = $_POST['codigo'];

                    $resultados = mysqli_query($conexion, "SELECT $tabla8.idUsuario, $tabla8.nomUsuario, $tabla8.apellUsuario, $tabla3.idInventario FROM $tabla3 INNER JOIN $tabla9 ON $tabla3.idInventario = $tabla9.idInv INNER JOIN $tabla8 ON $tabla9.idUs = $tabla8.idUsuario WHERE $tabla3.idInventario=$codigo");

                    while ($consulta = mysqli_fetch_array($resultados)) {
                        echo "
                        <table class='table table-bordered' style='margin-top: 35px; margin-bottom:40px;'>
                        <p>Información de los inventarios, consulta en el formulario para conocer más información</p>
                        <thead>
                        <tr>
                        <th scope='col'>Código</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellido</th>
                        <th scope='col'>Inventario que generó</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>" . $consulta['idUsuario'] . "</td>
                            <td>" . $consulta['nomUsuario'] . "</td>
                            <td>" . $consulta['apellUsuario'] . "</td>
                            <td>" . $consulta['idInventario'] . "</td>
                            </tr>
                        </tbody>
                        </table>
                        ";
                    }
                }
                if (isset($_POST['boton2'])) {

                    $codigo = $_POST['codigo'];

                    if ($codigo == "") {
                        echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "error",
                            title: "No se elimino el inventario",
                            text: "Por favor digita el código de un inventario",
                        });
                        </script>';
                    } else {
                        $resultados = mysqli_query($conexion, "DELETE FROM $tabla3 WHERE idInventario = $codigo");

                        echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "success",
                            title: "¡Inventario eliminado!",
                            text: "Se eliminó el inventario con éxito",
                        });
                        </script>';
                    }
                }

                include("../cerrar_conexion.php");

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>