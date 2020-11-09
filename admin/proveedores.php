<!DOCTYPE html>
<html lang="en">
  <head>
    <title>formulario</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./Css/proveedores.css">
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

    <div class="container-fuid p-5">
        <div>
            <p>Diligencia el formulario para registrar un nuevo Proveedor en el sistema</p>
        </div>
      <form action="proveedores.php" method="POST">

        <div class="form-row">
          <div class="form-group col-md-6">
            <!-- <h1>Formulario Proveedores</h1> -->
            <label>id del Proveedor</label>
            <input class="form-control" type="number" name="datos" placeholder="ID" />
          </div>
         
          <div class="form-group col-md-6">
            <label>Nombre Proveedores</label>
            <input class="form-control" type="text" name="nombreP" placeholder="Nombre Proveedores" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Correo Proveedores</label>
            <input class="form-control" type="email" name="correo" placeholder="Correo Proveedores" />
          </div>

          <div class="form-group col-md-6">
            <label>Telefono Proveedores</label>
            <input class="form-control"
              type="number"
              name="telfo"
              placeholder="Telefono Proveedores"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Dirrecciones Proveedores</label>
            <input class="form-control"
              type="text"
              name="direcc"
              placeholder="Dirrecciones Proveedores"
            />
          </div>

          <div class="form-group col-md-6">
            <label>Fecha</label>
            <input  class="form-control" type="date" name="fecha" placeholder="Fecha" />
          </div>
        </div>

        <button type="submit" class="btn btn-primary" name="boton">Registrar</button>
        </div>
      </form>

    <?php 
    if(isset($_POST['boton'])){
    include("../abrir_conexion.php");

    $datos=$_POST['datos'];
    $nombreP=$_POST['nombreP'];
    $correo=$_POST['correo'];
    $telfo=$_POST['telfo'];
    $direcc=$_POST['direcc'];
    $fecha=$_POST['fecha'];

    $conexion->query("INSERT INTO $tabla10
    (idProveedor,nomProveedor,correoProveedor,telProveedor,direccionProveedor,fechaEntrada)
    values('$datos','$nombreP','$correo','$telfo','$direcc','$fecha')");
    echo"los datos fueron ingresados correctamente";
    include("../cerrar_conexion.php"); } ?>

    <footer class="page-footer font-small blue" style="border-top: 1px solid rgb(226, 226, 226);">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Children's Play.com</a>
        </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
