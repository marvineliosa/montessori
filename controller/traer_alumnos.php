<?php
    include ('conexion.php');
    $id_grupo = $_REQUEST['id_grupo'];
    function consulta($query,$mysqli){
            $consulta = $mysqli->query($query);
            $resultado = mysqli_fetch_array($consulta);
            return $resultado;
        }//*/
    //variables de ayuda
    $fl=false;
    $error = "";
    $alumnos = array();
    $login = array();
    $status = array();//0->sin un grupo, 1->con un grupo diferente, 2-> en este grupo
    //consulta para sacar los cuento
    $query_login="select * from login where categoria=1";
    foreach ($mysqli->query($query_login) as $result) {
        $login[]=$result;
        $usuario = $result['usuario'];
        $query_user="select usuario,nombre from usuario where usuario = '$usuario'";
        $alumnos[] = consulta($query_user,$mysqli);
        //aqui vemos si está en este grupo, en otro o sin grupo
        $query_usuarios="select * from rel_usuario_grupo where id_usuario='$usuario'";
        $exito_usuario = consulta($query_usuarios,$mysqli);
        if($exito_usuario){
          if($exito_usuario['id_grupo']==$id_grupo){
            $status[]=2;
          }else{
            $status[]=1;
          }
        }else{
          $status[]=0;
        }//*/
    }
    $mysqli->close();
    $data = array(
    'usuarios' => $alumnos,
    'estatus' => $status,
    //'query' => $query_usuarios,
    'login' => $login,
    'error' => $error,
    "exito" => $fl,
    "total" => sizeof($alumnos)

    );

  echo json_encode($data);

?>
