<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
  /*$imagen = '';
  if ($_FILES["imagen_usuario"]["name"] != ''){
    $imagen = subir_imagen();

  }*/
  $stmt = $conexion->prepare("INSERT INTO luise(fecha, cpg1, fecha1, cpg2, comentario, peso)VALUES(:fecha, :cpg1, :fecha1, :cpg2, :comentario, :peso)");

  $resultado = $stmt->execute(
    array(
      ':fecha'      => $_POST["fecha"],
      ':cpg1'       => $_POST["cpg1"],
      ':fecha1'     => $_POST["fecha1"],
      ':cpg2'       => $_POST["cpg2"],
      ':comentario' => $_POST["comentario"],      
      ':peso'       => $_POST["peso"],
    //  ':id'       => $_POST["id_usuario"],
    )
    );
  
    if (!empty($resultado)) {
       echo 'Registro Creado';
    }
}
  
if ($_POST["operacion"] == "Editar") /*{
  $imagen = '';
  if ($_FILES["imagen_usuario"]["name"] != ''){
    $imagen = subir_imagen();

  }else{
    $imagen = $_POST["imagen_usuario_oculta"];

  }*/
  $stmt = $conexion->prepare("UPDATE luise SET fecha=:fecha, cpg1=:cpg1, fecha1=:fecha1, cpg2=:cpg2, comentario=:comentario, peso=:peso WHERE id = :id");

  $resultado = $stmt->execute(
    array(
      ':fecha'       => $_POST["fecha"],
      ':cpg1'        => $_POST["cpg1"],
      ':fecha1'      => $_POST["fecha1"],
      ':cpg2'        => $_POST["cpg2"],
      ':comentario'  => $_POST["comentario"],      
      ':peso'        => $_POST["peso"],
      ':id'          => $_POST["id_usuario"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro Actualizado';
    }
    
  
?>