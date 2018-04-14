<?php
    include ('conexion.php');
    //variables de ayuda
    $fl=false;
    $error = "";
    $cursos = array();

    //consulta para sacar los cuento
    $query_cursos="select * from curso";
    foreach ($mysqli->query($query_cursos) as $result) {
        $cursos[]=$result;
    }
    $mysqli->close();
    $data = array(
    'cursos' => $cursos,
    'error' => $error,
    "exito" => $fl,
    "total" => sizeof($cursos)

    );

  echo json_encode($data);

?>