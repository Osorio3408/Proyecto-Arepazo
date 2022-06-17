<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

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
        <a class="nav-link text-light" href="index.html">Menu de información </a>
      </li>

      <!--INVENTARIO-->
      <li class="nav-item ">
        <a class="nav-link " href="mod_inventario.html">Inventario </a>
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
          <div class="">
						<a class="Cerrar_sesion btn nav-link active border border-danger  " href="iniciar_seccion.html"  >Cerrar Sesión</a>
            </div>
					</div>
 
  </nav>
</header>



<body>
   <h2 class="mt-5">información:</h2><br>
   <p>Ventas realizadas: 100 <br><br>
   Venta mayor: $59000 Usuario: 1091884362<br><br>
   Ultima alteracion al inventario: 10/04/2022 Usuario: 1091884362</p>
</body>

<footer>

</footer>
</html>