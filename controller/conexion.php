<?php
  $developer=true;
  if(!$developer){
    $servidor = "localhost";
    $usuario = "marvin";
    $clave = "marvinpass";
    $database = "sistema_escolar";
  }else{
    $servidor = "localhost";
    $usuario = "marvin";
    $clave = "marvinpass";
    $database = "sistema_escolar";
  }
  $mysqli = new mysqli($servidor,$usuario,$clave,$database);
  if (mysqli_connect_errno()) {
      die("Error al conectar: ".mysqli_connect_error());
  }else{
	   //echo "conectado";
  }
  $acentos = $mysqli->query("SET NAMES 'utf8'");
 ?>
