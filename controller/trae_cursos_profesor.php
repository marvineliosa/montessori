<?php
    include ('conexion.php');
    $user = $_REQUEST['usuario'];
    //variables de ayuda
    $fl=false;
    $error = "";
    $cursos = array();
    $relacion = array();
    $tmp;
    //consulta para sacar los cuento
    $query_cursos="select * from curso";
    foreach ($mysqli->query($query_cursos) as $result) {
        $cursos[]=$result;
        $id_curso = $result['id_curso'];
        $query_relacion="select * from rel_curso_profesor where id_profesor='$user' and id_curso=$id_curso";
        $existeRelacion = $mysqli->query($query_relacion);
        $tmp = $existeRelacion;
        if($existeRelacion){
            $relacion[]=mysqli_fetch_array($existeRelacion);
        }else{
            $relacion[]=null;
        }
    }
    $mysqli->close();
    $data = array(
        //"existerelacion" => $tmp,
        //"query" => $query_relacion,
        'cursos' => $cursos,
        'error' => $error,
        "exito" => $fl,
        "total" => sizeof($cursos),
        "relacion" => $relacion
    );

  echo json_encode($data);

?>