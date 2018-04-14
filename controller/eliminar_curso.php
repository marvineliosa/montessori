<?php
    
    include ('conexion.php');
    include ('funciones.php');
    $id_curso_viejo = $_REQUEST['id_curso'];
    $fl = false;
    $query_delete = "DELETE FROM curso WHERE id_curso = $id_curso_viejo";
    $exito_elimina = $mysqli->query($query_delete);
    if($exito_elimina){
        $fl = true;
    }
    $data = array(
        "exito" => $fl,
        "curso_viejo" => $id_curso_viejo
        );
      echo json_encode($data);//*/
?>