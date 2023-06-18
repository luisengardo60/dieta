<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id"])) 
{
 /* $imagen = obtener_nombre_imagen($_POST["id"]);
  if ($imagen != '')
  {
    unlink("img/" . $imagen);
    }*/
  $stmt = $conexion->prepare("DELETE FROM luise WHERE id = :id");

  $resultado = $stmt->execute(
    array(
       ':id'            => $_POST["id"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro borrado';
    }

}