<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child's Play</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/juguetes.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="../img/logoH.png" alt="logo" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white;">Inicio</a>
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
        <a class="navbar-brand" href="#">Registrar Juguete</a>
    </nav>

    <div class="container-fuid p-5">
        <div>
            <p>Diligencia el formulario para registrar un nuevo juguete en el sistema</p>
        </div>
        <form method="POST" action="juguetes.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Código</label>
                    <input type="text" class="form-control" name="codigo">
                </div>
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Seleccionar</option>
                        <option value="Barbie">Barbie</option>
                        <option value="Peluche">Peluche</option>
                        <option value="Muñeca/Muñeco">Muñeca/Muñeco</option>
                        <option value="Figura de acción">Figura de acción</option>
                        <option value="Kits">Kits</option>
                        <option value="Rompecabezas">Rompecabezas</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Valor</label>
                    <input type="text" class="form-control" name="valor">
                </div>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="desc">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="boton">Registrar</button>
        </form>

        <?php
        if(isset($_POST['boton'])){
            include("../abrir_conexion.php");

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $valor = $_POST['valor'];
            $descripcion = $_POST['desc'];
            $fecha = $_POST['fecha'];
            $estado = $_POST['estado'];

            $conexion->query("INSERT INTO $tabla6 (idJuguete,nomJuguete,categoria,valor_venta,descripcion,fechaPublica,estado) values ('$codigo','$nombre','$categoria','$valor','$descripcion','$fecha','$estado')");

            echo"Los datos fueron ingresados correctamente";

            include("../cerrar_conexion.php");
        }
    ?>
    </div>

    <footer class="page-footer font-small blue" style="border-top: 1px solid rgb(226, 226, 226);">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Children's Play.com</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>