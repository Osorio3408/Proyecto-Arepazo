<?php

include "conexion.php";

$nombre_usuario= $_POST ["nombre_usuario"];
$telefono= $_POST ["telefono"];
$correo=$_POST["correo"];
$contraseña =$_POST["contraseña"];
$tipo_usuario=$_POST["tipo_usuario"];

$insertar="INSERT INTO `usuario`( `nombre_usuario`, `telefono`, `correo`, `contraseña`, `tipo_usuario`)
 VALUES ('$nombre_usuario','$telefono','$correo','$contraseña','$tipo_usuario')";

if(mysqli_query($conexion,$insertar)){
    echo "los datos fueron enviados";
}else{
   echo "no se enviaron";
}

?>