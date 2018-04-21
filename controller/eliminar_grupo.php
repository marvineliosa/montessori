<?php
    include ('conexion.php');
    $id_grupo = $_REQUEST['id_grupo'];
    //variables de ayuda
    $fl=false;
    $error = "";
    $tutores = array();
    $exito_login="";

    $query_elimina_grupo = "delete from grupo where id_grupo=$id_grupo";
    $exito_elimina_grupo = $mysqli->query($query_elimina_grupo);
    if($exito_elimina_grupo){
      $query_desenlaza = "delete from rel_usuario_grupo where id_grupo=$id_grupo";
      $exito_desenlaza = $mysqli->query($query_desenlaza);
      if($exito_desenlaza){
        $fl=true;
      }else{
        $error = "Error al intentar eliminar la relación";
      }
    }else{
      $error = "No se pudo eliminar el grupo";
    }
    $mysqli->close();
    $data = array(
    //'usuario' => $exito_usuario,
    //'query' => $query_desenlaza,
    'error' => $error,
    "exito" => $fl

    );

  echo json_encode($data);

?>
