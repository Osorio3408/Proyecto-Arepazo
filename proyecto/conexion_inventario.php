<?php

include "conexion.php";

$nombre_producto= $_POST["nombre_producto"];
$cantidad=$_POST["cantidad"];
$tipo =$_POST["tipo"];


$insert = "INSERT INTO `inventario`( `nombre_producto`, `cantidad`, `tipo`) VALUES ('$nombre_producto','$cantidad','$tipo')";

if(mysqli_query($conexion,$insert)){
    echo "los datos fueron enviados";
}else{
   echo "no se enviaron";
}

?>