<?php

//variables auxiliares
  $exito=false;

  session_start();
  if(isset($_SESSION['usuario'])){
    $exito=true;
  }
  $data = array(
    'usuario' => ($exito?$_SESSION['usuario']:""),
    "exito" => $exito
    );
  echo json_encode($data);

?>
