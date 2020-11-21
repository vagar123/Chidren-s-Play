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
        <a class="navbar-brand" style="color:#e63378;">Ventas / Generar Factura</a>
        <button type="button" class="btn btn-info"><a href="facturas.php" style="color:white; text-decoration:none;">Atrás</a></button>
    </nav>

    <div class="alert alert-primary" role="alert">
        No olvides ingresar el código de la factura junto con la información de los productos que adquirirá el cliente!
    </div>

    <div class="container-fluid ">
        <div class="container mt-5 mb-5 pt-4">
            <div>
                <form method="POST" action="registrarFactura.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Código</label>
                            <input type="text" class="form-control" name="codigo">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Documento cliente</label>
                            <input type="text" class="form-control" name="cliente">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Empleado</label>
                            <input type="text" class="form-control" placeholder="nombre completo" name="empleado">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Descripción</label>
                            <input type="text" class="form-control" name="descripcion">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mb-3" name="boton2">Registrar</button>
                </form>
            </div>

            <form method="POST" action="registrarFactura.php">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Código Factura</label>
                        <input type="text" class="form-control" name="idFactura">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Código Juguete</label>
                        <input type="text" class="form-control" name="idJuguete">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" placeholder="nombre completo" name="cantidad">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Valor Unitario</label>
                        <input type="text" class="form-control" name="valorUni">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Valor Total</label>
                        <input type="text" class="form-control" name="valorTotal">
                    </div>
                </div>
                <button class="btn btn-success mb-3" type="submit" name="boton">
                    Registrar
                </button>
            </form>
        </div>

        <?php
        if (isset($_POST['boton2'])) {
            include("../abrir_conexion.php");

            $codigo = $_POST['codigo'];
            $cliente = $_POST['cliente'];
            $fecha = $_POST['fecha'];
            $descripcion = $_POST['descripcion'];

            $conexion->query("INSERT INTO $tabla1 (idFactura,idUsu,fecha,descripcion) values ('$codigo','$cliente','$fecha','$descripcion')");

            echo '<script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "Generación exitosa",
                text: "Completaste con éxito la generación de la nueva factura!",
            });
            </script>';
            include("../cerrar_conexion.php");
        }
        if (isset($_POST['boton'])) {
            include("../abrir_conexion.php");

            $codigoF = $_POST['idFactura'];
            $codigoJ = $_POST['idJuguete'];
            $cantidad = $_POST['cantidad'];
            $valorUni = $_POST['valorUni'];
            $valorTotal = $_POST['valorTotal'];

            $conexion->query("INSERT INTO $tabla4 (idFact,idJugu,cantidad,valorUnita,valorTotal) values ('$codigoF','$codigoJ','$cantidad','$valorUni','$valorTotal')");

            echo '<script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "Generación exitosa",
                text: "La primer parte de la factura fue creada, continua con la siguiente por favor",
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