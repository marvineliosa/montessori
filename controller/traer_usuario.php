<?php
    include ('conexion.php');
    $id_usuario = $_REQUEST['id_usuario'];
    function consulta($query,$mysqli){
            $consulta = $mysqli->query($query);
            $resultado = mysqli_fetch_array($consulta);
            return $resultado;
        }//*/
    //variables de ayuda
    $fl=false;
    $error = "";
    $tutores = array();
    $exito_login="";

    //consulta para sacar los cuento
    $query_usuarios="select * from usuario where usuario='$id_usuario'";
    $exito_usuario = consulta($query_usuarios,$mysqli);
    if($exito_usuario){
      $query_login="select * from login where usuario='$id_usuario'";
      $exito_login = consulta($query_login,$mysqli);
      $query_rel_tutor="select * from rel_alumno_tutor where id_usuario='$id_usuario'";
      foreach ($mysqli->query($query_rel_tutor) as $result) {
        $id_tutor = $result['id_tutor'];
        $query_tutor="select * from tutor where id_tutor=$id_tutor";
        $tutores[] = consulta($query_tutor,$mysqli);
      }
      $fl=true;
    }
    $mysqli->close();
    $data = array(
    'usuario' => $exito_usuario,
    //'query' => $query_usuarios,
    'login' => $exito_login,
    'tutores' => $tutores,
    'error' => $error,
    "exito" => $fl

    );

  echo json_encode($data);

?>
