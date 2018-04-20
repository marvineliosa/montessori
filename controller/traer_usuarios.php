<?php
    include ('conexion.php');
    function consulta($query,$mysqli){
            $consulta = $mysqli->query($query);
            $resultado = mysqli_fetch_array($consulta);
            return $resultado;
        }//*/
    //variables de ayuda
    $fl=false;
    $error = "";
    $usuarios = array();
    $login = array();

    //consulta para sacar los cuento
    $query_usuarios="select usuario,nombre from usuario";
    foreach ($mysqli->query($query_usuarios) as $result) {
        $usuarios[]=$result;
        $usuario = $result['usuario'];
        $query_login="select categoria from login where usuario = '$usuario'";
        $login[] = consulta($query_login,$mysqli);


    }
    $mysqli->close();
    $data = array(
    'usuarios' => $usuarios,
    //'query' => $query_usuarios,
    'login' => $login,
    'error' => $error,
    "exito" => $fl,
    "total" => sizeof($usuarios)

    );

  echo json_encode($data);

?>
