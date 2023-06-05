<?php

include("conexion.php");
include("funciones.php");

$query = "";
$salida = array();
$query = "SELECT * FROM luise ";

if (isset($_POST["search"]["value"])) {
  $query .= 'WHERE fecha LIKE "%' . $_POST["search"]["value"] . '%" ';
  $query .= 'OR cpg1 LIKE "%' . $_POST["search"]["value"] . '%" ';
  $query .= 'OR cpg2 LIKE "%' . $_POST["search"]["value"] . '%" ';

}

if (isset($_POST["order"])){
  $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.
  $_POST["order"][0]['dir'] . ' ';

}else{
  $query .= 'ORDER BY id ASC ';

}

if($_POST["length"] != -1){
  $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
}

$stmt = $conexion->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll();
$datos = array();
$filtered_rows = $stmt->rowCount();
foreach($resultado as $fila){
  /*$imagen = '';
  if($fila["imagen"] != ''){
    $imagen = '<img src="img/' . $fila["imagen"] . '" class="img-thumbnail"
    width="50" height="35" />';
  }else{
    $imagen = '';
  }*/
  $sub_array = array();
 //$sub_array[] = $fila["id"];
 $sub_array[] = $fila["fecha"];
 $sub_array[] = $fila["cpg1"];
 $sub_array[] = $fila["fecha1"];
 $sub_array[] = $fila["cpg2"];
 $sub_array[] = $fila["comentario"];
 $sub_array[] = $fila["peso"];
 //$sub_array[] = $imagen;
 $sub_array[] ='<button type="button" name="editar" id="'.$fila["id"].'" class="btn btn-primary  btn-xs editar">Editar</button>';
 $sub_array[] ='<button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger btn-xs borrar">Borrar</button>';
 $datos[] = $sub_array;

}

$salida = array(
  "draw"             => intval($_POST["draw"]),
  "recordsTotal"     => $filtered_rows,
  "recordsFiltered"  => obtener_todos_registros(),
  "data"             => $datos
);  

echo json_encode($salida);

?>