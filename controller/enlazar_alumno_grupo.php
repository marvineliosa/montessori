<?php
    include ('conexion.php');
    $id_usuario = $_REQUEST['id_usuario'];
    $id_grupo = $_REQUEST['id_grupo'];
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
    $query_usuarios="select * from rel_usuario_grupo where id_usuario='$id_usuario'";
    $exito_usuario = consulta($query_usuarios,$mysqli);
    if(!$exito_usuario){
      $query_insert = "insert into rel_usuario_grupo(id_usuario,id_grupo) values('$id_usuario',$id_grupo)";
      $exito_insert = $mysqli->query($query_insert);
      if($exito_insert){
        $fl=true;
      }else{
        $error = "Error al enlazar alumno.";
      }
    }else{
      $error = "El usuario ya está registrado a un grupo.";
    }
    $mysqli->close();
    $data = array(
    //'usuario' => $exito_usuario,
    //'query' => $query_usuarios,
    'error' => $error,
    "exito" => $fl

    );

  echo json_encode($data);

?>
