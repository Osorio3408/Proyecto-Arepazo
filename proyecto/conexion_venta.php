<?php

include "conexion.php";

$id_vendedor=$_POST ["vendedor"];
$tipo_producto=$_POST ["producto"];
$precio=$_POST ["precio"];


$insertarr= "INSERT INTO `registro_ventas`(`id_vendedor`, `nombre_producto`, `precio`)
 VALUES ('$id_vendedor','$tipo_producto','$precio')";


if(mysqli_query($conexion,$insertarr)){
    echo "los datos fueron enviados";
}else{
   echo "no se enviaron";
}
?>