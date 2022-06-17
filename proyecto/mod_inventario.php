<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<header>
  
    <h1>Bienvenido Administrador</h1>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav" >

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo" style="width:90px;">
    </a>

    <!-- NAVS -->
    <ul class="navbar-nav">
      <li class="nav-item">|
        <a class="nav-link" href="index.html">Menu de información </a>
      </li>

      <!--INVENTARIO-->
      <li class="nav-item ">
        <a class="nav-link text-light" href="mod_inventario.html">Inventario </a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_venta.html">Registrar Venta </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuarios.html">Usuarios </a>
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
						<a href="iniciar_seccion.html" class="Cerrar_sesion btn nav-link active border border-danger " >Cerrar Sesión</a>
					</div>
  </nav>
</header>


  <!-- AGREGAR - MODAL -->

  <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#myModal">
    Agregar
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Producto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="post" action="conexion_inventario.php">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">Nombre del producto:</label>
          <input type="text" class="form-control" id="txt" name="nombre_producto">
        </div>
        <div class="form-group">
          <label for="txt">Cantidad</label>
          <input type="text" class="form-control" id="txt" name="cantidad">
        </div>

        <div class="form-group">
          <label for="txt">Tipo</label>
          <input type="text" class="form-control" id="txt" name="tipo">
        </div>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" data-bs-dismiss="modal" name="registrar_producto">
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
        <th>ID_PRODUCTO</th>
        <th>NOMBRE_PRODUCTO</th>
        <th>CANTIDAD</th>
        <th>TIPO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>




    <?php $resultado = mysqli_query($conexion, $usuarios); while
($row=mysqli_fetch_assoc($resultado)){ ?>
    <tr class="table-success">
      <td><?php echo $row["id_producto"] ?></td>
      <td><?php echo $row["nombre_producto"] ?></td>
      <td><?php echo $row["cantidad"] ?></td>
      <td><?php echo $row["tipo"] ?></td>
      <td><a href="borrar_producto.php?id_producto=<?php echo $row
['id_producto'];?>"i class="material-icons" style="color: red;
">delete</i>
      <i class="material-icons ml-5" style="color:blue">edit</i></td>
    </tr>
<?php } ?>








<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script tsrc="datatables/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

</body>

<footer>
</footer>
</html>