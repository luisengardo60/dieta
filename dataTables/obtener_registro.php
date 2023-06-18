<?php
include("conexion.php");
include("funciones.php");

if (isset($_POST["id"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM luise WHERE id = '".$_POST["id"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["fecha"] = $fila["fecha"];
        $salida["cpg1"] = $fila["cpg1"];
        $salida["fecha1"] = $fila["fecha1"];
        $salida["cpg2"] = $fila["cpg2"];
        $salida["comentario"] = $fila["comentario"];  
        $salida["peso"] = $fila["peso"];      
        /*if ($fila["imagen"] != "") {
            $salida["imagen_usuario"] = '<img src="img/' . $fila["imagen"] . '" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="imagen_usuario_oculta" value="'.$fila["imagen"].'"';
        }else{
            $salida["imagen_usuario"] = '<input type="hidden" name="imagen_usuario_oculta" value="'.$fila["imagen"].'"';
        }*/

    }

    echo json_encode($salida);
}

?>