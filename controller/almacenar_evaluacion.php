<?php
    include ('conexion.php');
    $calificacion = $_REQUEST['calificacion'];
    $curso = $_REQUEST['id_curso'];
    $usuario = "";
    $fl = false;
    session_start();
      if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
        //$insert_curso = "INSERT INTO rel_curso_profesor(id_curso,id_profesor,calificacion​,)values('$titulo','$objetivo','$descripcion')";
        $insert_curso = "INSERT INTO rel_curso_profesor(id_curso,id_profesor,calificacion,fecha,estatus)values($curso,'$usuario',$calificacion,'12-04-2018 04:20:15','cerrado')";
        //echo $insert_curso;
        $exito_curso = $mysqli->query($insert_curso);
          if($exito_curso){
              $fl = true;
          }
      }else{
          
      }
    $data = array(
        "exito" => $fl
    );
  echo json_encode($data);

?>