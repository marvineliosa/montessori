<?php
    include ('conexion.php');
    $id_usuario = $_REQUEST['id_usuario'];
    //variables de ayuda
    $fl=false;
    $error = "";


    $query_eliminaLogin = "delete from login where usuario = '$id_usuario'";
    $exito_eliminaLogin = $mysqli->query($query_eliminaLogin);
    if($exito_eliminaLogin){
      $query_eliminaUsuario = "delete from usuario where usuario = '$id_usuario'";
      $exito_eliminaUsuario = $mysqli->query($query_eliminaUsuario);
      if($exito_eliminaUsuario){
        $fl=true;
      }else{
        $error = "Error al intentar eliminar usuario";
      }
    }else{
      $error = "Error al intentar eliminar login";
    }//*/

    $mysqli->close();
    $data = array(
    //'usuario' => $exito_usuario,
    //'query' => $query_desenlaza,
    'error' => $error,
    "exito" => $fl

    );

  echo json_encode($data);

?>
