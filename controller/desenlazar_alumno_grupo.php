<?php
    include ('conexion.php');
    $id_usuario = $_REQUEST['id_usuario'];
    $id_grupo = $_REQUEST['id_grupo'];
    //variables de ayuda
    $fl=false;
    $error = "";
    $tutores = array();
    $exito_login="";

    $query_desenlaza = "delete from rel_usuario_grupo where id_usuario='$id_usuario' and id_grupo=$id_grupo";
    $exito_desenlaza = $mysqli->query($query_desenlaza);
    if($exito_desenlaza){
      $fl=true;
    }else{
      $error = "Error al intentar eliminar la relación";
    }
    $mysqli->close();
    $data = array(
    //'usuario' => $exito_usuario,
    'query' => $query_desenlaza,
    'error' => $error,
    "exito" => $fl

    );

  echo json_encode($data);

?>
