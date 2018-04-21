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
  $id_tutor1 = $_REQUEST['id_tutor1'];
  $id_tutor2 = $_REQUEST['id_tutor2'];

  //variables de ayuda
  $fl = false;
  $error = "";
  $query_update_usuario = "update usuario set nombre='$nombre', edad='$edad_alumno', telefono='$telefono_alumno', direccion='$direccion_alumno' where usuario = '$id_usuario'";
  $exito_update_usuario = $mysqli->query($query_update_usuario);
  if($exito_update_usuario){
    $query_update_login = "update login set contrasena='$contrasena' where usuario = '$id_usuario'";
    $exito_update_login = $mysqli->query($query_update_login);
    if($exito_update_login){
      if(strcmp($id_tutor1,"limpio")!=0){
          $query_tutor1 = "update tutor set nombre='$nombre_tutor1', telefono='$telefono_tutor1' where id_tutor='$id_tutor1'";
          $exito_update_tutor = $mysqli->query($query_tutor1);
      }else{
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
      }
      if(strcmp($id_tutor2,"limpio")!=0){
        $query_tutor2 = "update tutor set nombre='$nombre_tutor2', telefono='$telefono_tutor2' where id_tutor='$id_tutor2'";
        $exito_update_tutor = $mysqli->query($query_tutor2);
      }else{
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
      }
      $fl = true;
    }else{
      $error = "Error al editar los datos del sesión";
    }
  }else{
    $error = "Error al editar los datos del alumno";
  }







  $data = array(
    "exito" => $fl,
    //"query" => $query_tutor1,
    "error" => $error
  );

  echo json_encode($data);
?>
