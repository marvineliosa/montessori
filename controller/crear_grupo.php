<?php
  include ('conexion.php');
  $nombre = $_REQUEST['nombre'];
  $nivel = $_REQUEST['nivel'];
  $grado = $_REQUEST['grado'];

  //variables de ayuda
  $fl = false;
  $error = "";
  $id_grupo=0;

  $query_insert = "";
  $query_inserta = "insert into grupo(nombre_grupo,grado,nivel)values('$nombre',$nivel,'$grado')";
  $exito_inserta = $mysqli->query($query_inserta);
  if($exito_inserta){
    $id_grupo = $mysqli->insert_id;
    $fl=true;
  }else{
    $error = "Error al almacenar el grupo";
  }

  $data = array(
    "exito" => $fl,
    "query" => $query_inserta,
    "error" => $error,
    "id_grupo" => $id_grupo
  );

  echo json_encode($data);
?>
