<?php
  include ('conexion.php');
  $user = $_REQUEST['user'];
  $pass = $_REQUEST['pass'];//*/
  /*$mail = "marvineliosa@hotmail.com";
  $pass = "marvinn";//*/
  //variables de ayuda
  $fl=false;
  $error = "";
  $i=0;
  $categoria = 0;
  //consulta
  $query="select * from login where usuario='$user'";
  $existeUsuario = $mysqli->query($query);
  $existeUsuario = mysqli_fetch_array($existeUsuario);
  $mysqli->close();
  if(!$existeUsuario){
    $error="Usuario no existente.";
  }else{
    if(strcmp($existeUsuario['contrasena'],$pass)==0){
      $fl=true;
      session_start();
      $categoria = $existeUsuario['categoria'];
      if(!isset($_SESSION['usuaio'][$user])){
        $_SESSION['usuario'] = $user;
        $_SESSION['categoria']=$categoria;
          
      }else{
        $_SESSION['usuario'] = $user;
        $_SESSION['categoria']=$categoria;
      }
    }else{
      $error="Contraseña invalida";
    }

  }
  $data = array(
    'error' => $error,
    "exito" => $fl,
    "categoria" => $categoria
    );
  echo json_encode($data);
?>
