<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<header>
    
    <h1>Bienvenido Administrador</h1>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav">

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
      <li class="nav-item">
        <a class="nav-link text-light" href="reg_venta.html">Registrar Venta </a>
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
                <a class="nav-link active" href="#">Ayuda</a>
            </li>
        </ul>
    </div>
						<a href="iniciar_seccion.html" class="Cerrar_sesion btn nav-link active border border-danger">Cerrar Sesión</a>
					</div>
  </nav>
</header>

<body>
  <div class="container">
  <form action="conexion_venta.php" method="post" class="needs-validation mt-5" novalidate>
    <div class="form-group">
      <label for="uname">ID_Vendedor</label>
      <input type="number" class="form-control" id="uname" placeholder="Enter username" name="vendedor" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Porfavor, ingrese su ID</div>
    </div>
    <div class="form-group">
      <label for="uname">Producto:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="producto" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor, ingrese el nombre del producto</div>
    </div>
    <div class="form-group">
      <label for="pwd">Precio:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter password" name="precio" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor, ingrese el precio del producto.</div>
    </div>
    <input type="submit" class="btn btn-primary " ></input>
  </form>
</div>
<script src="valid.js"></script>
</body>

<footer>

</footer>
</html>