<?php
  include ('conexion.php');
  $nombre = $_REQUEST['nombre'];
  $direccion_alumno = $_REQUEST['direccion_alumno'];
  $telefono_alumno = $_REQUEST['telefono_alumno'];
  $edad_alumno = $_REQUEST['edad_alumno'];
  $select_usuario = $_REQUEST['select_usuario'];
  $id_usuario = $_REQUEST['id_usuario'];
  $contrasena = $_REQUEST['contrasena'];
  $nombre_tutor1 = $_REQUEST['nombre_tutor1'];
  $nombre_tutor2 = $_REQUEST['nombre_tutor2'];
  $telefono_tutor1 = $_REQUEST['telefono_tutor1'];
  $telefono_tutor2 = $_REQUEST['telefono_tutor2'];

  //variables de ayuda
  $fl = false;
  $error = "";
  $query_insert = "";
  $query_verifica = "select * from usuario where usuario = '$id_usuario'";
  $existe_usuario = $mysqli->query($query_verifica);
  $existe_usuario = mysqli_fetch_array($existe_usuario);
  if(!$existe_usuario){//si el usuario no existe
    $tipo = 0;
    if(strcmp($select_usuario,"Alumno")==0){
      $tipo = 1;
    }else if(strcmp($select_usuario,"Profesor")==0){
      $tipo = 2;
    }else if(strcmp($select_usuario,"Administrador")==0){
      $tipo = 3;
    }else{
      $tipo = -1;
      $error = "Los datos han sido corrompidos...";
    }
    if($tipo != -1){
      $query_insert = "insert into usuario(usuario,nombre,edad,telefono,direccion) values('$id_usuario','$nombre',$edad_alumno,'$telefono_alumno','$direccion_alumno')";
      $exito_insert = $mysqli->query($query_insert);
      if($exito_insert){
        $query_insert2 = "insert into login(usuario,contrasena,categoria)values('$id_usuario','$contrasena',$tipo)";
        $exito_insert2 = $mysqli->query($query_insert2);
        if($exito_insert2){
          $fl = true;
        }else{
          $error = "Error al almacenar el usuario";
        }
      }else{
        $erro = "Error al almacenar los datos del alumno";
      }
    }
    //agregamos a los tutores
    //tutor 1
    if(strcmp($nombre_tutor1,"")!=0){
      $query_insert = "insert into tutor(nombre,telefono) values('$nombre_tutor1','$telefono_tutor1')";
      $exito_insert = $mysqli->query($query_insert);
      $id_tutor1 = $mysqli->insert_id;
      if($exito_insert){
        //creamos las relaciones entre tutor y alumno
        $query_insert = "insert into rel_alumno_tutor(id_usuario,id_tutor) values('$id_usuario',$id_tutor1)";
        $exito_insert = $mysqli->query($query_insert);
      }
    }
    if(strcmp($nombre_tutor2,"")!=0){
      $query_insert = "insert into tutor(nombre,telefono) values('$nombre_tutor2','$telefono_tutor2')";
      $exito_insert = $mysqli->query($query_insert);
      $id_tutor2 = $mysqli->insert_id;
      if($exito_insert){
        //creamos las relaciones entre tutor y alumno
        $query_insert = "insert into rel_alumno_tutor(id_usuario,id_tutor) values('$id_usuario',$id_tutor2)";
        $exito_insert = $mysqli->query($query_insert);
      }
    }
  }else{
    $error = "El usuario ya existe en el sistema.";
  }

  $data = array(
    "exito" => $fl,
    "query" => $query_verifica,
    "error" => $error
  );

  echo json_encode($data);
?>
