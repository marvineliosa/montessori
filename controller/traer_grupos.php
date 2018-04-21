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
    $grupos = array();
    $login = array();

    //consulta para sacar los cuento
    $query_usuarios="select * from grupo";
    foreach ($mysqli->query($query_usuarios) as $result) {
        $grupos[]=$result;
    }
    $mysqli->close();
    $data = array(
    'grupos' => $grupos,
    //'query' => $query_usuarios,
    'error' => $error,
    "exito" => $fl,
    "total" => sizeof($grupos)

    );

  echo json_encode($data);

?>
