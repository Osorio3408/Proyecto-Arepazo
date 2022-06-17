<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="confirmacion_borrar_usuario.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<header >

    <h1>Bienvenido Administrador</h1>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: -9px; margin-left: -2px; margin-right: -2px;">

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo" style="width:90px;">
    </a>

    <!-- NAVS -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Menu de información </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link " href="mod_inventario.html">Inventario </a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_venta.html">Registrar Venta </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="usuarios.html">Usuarios </a>
      </li>
    </ul>


    <!-- Cerrar Sesión & Ayuda -->
    <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <ul class="nav nav-pills " style="text-align: right;">
            <li class="nav-item">
                <a class="nav-link active" href="#" style="background: #8FBC8F ; color: black; ">Ayuda</a>
            </li>
        </ul>
    </div>
						<a href="iniciar_seccion.html" class="Cerrar_sesion btn nav-link active border border-danger ">Cerrar Sesión  </a>
					</div>
  </nav>  
</header>



  <!-- AÑADIR - MODAL -->

  <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#myModal">
    AÑADIR
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Usuario</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="post" action="conexion_usuario.php">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">Nombre del usuario: </label>
          <input type="text" class="form-control" id="txt" name="nombre_usuario">
        </div>
        <div class="form-group">
          <label for="txt">Telefono: </label>
          <input type="text" class="form-control" id="txt" name="telefono">
        </div>

        <div class="form-group">
          <label for="txt">Correo Electronico: </label>
          <input type="text" class="form-control" id="txt" name="correo">
        </div>

        <div class="form-group">
          <label for="txt">Tipo usuario: </label>
          <input type="text" class="form-control" id="txt" name="tipo_usuario">
        </div>

        <div class="form-group">
          <label for="txt">Contraseña: </label>
          <input type="text" class="form-control" id="txt" name="contraseña">
        </div>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" data-bs-dismiss="modal" name="registrar_usuario">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>
</form>

<body>

  <table class="table mt-0 ml-1">
    <thead>
      <tr>
        <th>ID_USUARIO</th>
        <th>NOMBRE_USUARIO</th>
        <th>TELEFONO</th>
        <th>CORREO</th>
        <th>TIPO_USUARIO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
  
    <tr class="table-success">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="#"i  class="material-icons" style="color: red;">delete</a></i>
      <i class="material-icons ml-5" >edit</i></td>



</body>

<footer>
</footer>
</html>