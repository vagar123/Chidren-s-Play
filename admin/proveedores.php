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
    <link rel="stylesheet" href="Css/proveedores.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
                    <a class="nav-link" href="#">Proveedores</a>
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

    <div class="container" style="width: 100%; display:flex; margin-right:0%;margin-left:0%;">
        <nav id="sidebar" style="width: 25%; border-right: 1px solid #ccc;">
            <div class="p-4 pt-5">
                <p>Proveedores prinicpales</p>
                <ul class="list-unstyled components mb-5">

                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Mattel </a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Hasbroo</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Nerf</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Barbie</a></li>
                </ul>
                <div class="mb-5">
                    <p>Nuevos proveedores</p>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Leap Frog</a> <br>
                        <a href="#" class="tag-cloud-link">JollyBaby</a> <br>
                        <a href="#" class="tag-cloud-link">PlayMobil</a>
                    </div>
                </div>
                <div class="mb-5">
                    <p>Actividad reciente</p>
                    <small>Ingresos nuevos</small>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Desactivaciones</small>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </nav>

        <div style="width: 100%; margin-top: 60px;">
            <h2 class="titulo pb-4" style="margin-left: 50px; color: #e63378; font-family: 'Nunito', sans-serif; font-weight: 700;">Proveedores actuales</h2>

            <nav class="navbar navbar-light bg-light mb-4" style="width: 100%; margin-left:50px;">
                <p>Consulta los productos que ha entregado cada proveedor, ingrese por favor el código del proveedor.</p>
                <form class="form-inline pt-4 pb-4" method="POST" action="proveedores.php">
                    <button type="submit" class="btn btn-primary mb-2" name="boton">Consultar</button>
                </form>
                <div style="display: flex; justify-content:left;">
                    <button type='button' class='btn btn-success mr-4'><a href="registrarProveedores.php" style="color:white; text-decoration:none;">Ingresar proveedor</a></button>
                    <button type="button" class="btn btn-danger mr-4" data-toggle="modal" data-target="#eliminarModal">
                        Eliminar Proveedor
                    </button>
                    <button type="button" class="btn btn-info mr-4"><a href="modificarProveedor.php" style="color:white; text-decoration:none;">Modificar Proveedor</a></button>
                </div>
            </nav>

            <!-- Modal Eliminar inventario -->
            <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar proveedor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label>Digita el código del proveedor que desees eliminar</label>
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

            <div class="alert alert-primary mb-4" role="alert" style="margin-left: 50px;">
                Cuando elimines un registro recuerda actualizar la tabla de datos!!!
            </div>

            <button type="submit" class="btn btn-secondary mb-4" onclick="location.reload()" style="margin-left: 50px;">Actualizar tabla de datos </button>

            <table class="table" style="width: 100%; margin-left:50px; margin-top:30px;">
                <thead style="background-color: #17a2b8; color:white;">
                    <tr>
                        <th scope='col'>Código</th>
                        <th scope='col'>Proveedor</th>
                        <th scope='col'>Correo</th>
                        <th scope='col'>Teléfono</th>
                        <th scope='col'>Dirección</th>
                        <th scope='col'>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../abrir_conexion.php");
                    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla7");
                    while ($consulta = mysqli_fetch_array($resultados)) {
                        echo "
                                <tr>
                                    <td>" . $consulta['idProveedor'] . "</td>
                                    <td>" . $consulta['nomProveedor'] . "</td>
                                    <td>" . $consulta['correoProveedor'] . "</td>
                                    <td>" . $consulta['telProveedor'] . "</td>
                                    <td>" . $consulta['direccionProveedor'] . "</td>
                                    <td>" . $consulta['fechaEntrada'] . "</td>
                                </tr>
                            ";
                    }
                    if (isset($_POST['boton'])) {
                        $resultados = mysqli_query($conexion, "SELECT $tabla7.idProveedor, $tabla7.nomProveedor, $tabla6.idJuguete, $tabla6.nomJuguete FROM $tabla7 INNER JOIN $tabla5 ON $tabla7.idProveedor = $tabla5.idProv INNER JOIN $tabla6 ON $tabla5.idJug = $tabla6.idJuguete");

                        echo "
                                <table class='table' style='width: 100%; margin:50px;'>
                                <thead style='background-color: #17a2b8; color: white;'>
                                    <tr>
                                        <th scope='col'>Código Proveedor</th>
                                        <th scope='col'>Proveedor</th>
                                        <th scope='col'>Código Juguete</th>
                                        <th scope='col'>Juguete</th>
                                    </tr>
                                </thead>
                            ";

                        while ($consulta = mysqli_fetch_array($resultados)) {
                            echo "
                                    <tbody>
                                        <tr>
                                        <td>" . $consulta['idProveedor'] . "</td>
                                        <td>" . $consulta['nomProveedor'] . "</td>
                                        <td>" . $consulta['idJuguete'] . "</td>
                                        <td>" . $consulta['nomJuguete'] . "</td>
                                        </tr>
                                    </tbody>
                                ";
                        }
                    }
                    if (isset($_POST['boton2'])) {

                        $codigo = $_POST['codigo'];

                        if ($codigo == "") {
                            echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "error",
                                title: "No se elimino el proveedor",
                                text: "Por favor digita el código de un proveedor",
                            });
                            </script>';
                        } else {
                            $resultados = mysqli_query($conexion, "DELETE FROM $tabla7 WHERE idProveedor = $codigo");

                            echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "success",
                                title: "Proveedor eliminado!",
                                text: "Se eliminó el proveedor con éxito",
                            });
                            </script>';
                        }
                    }
                    include("../cerrar_conexion.php");
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>