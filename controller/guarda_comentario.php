<?php
include ('conexion.php');
$prof= $_REQUEST['user'];
$alumno= $_REQUEST['alumno'];
$materia= $_REQUEST['materia'];
$descr= $_REQUEST['descripcion'];
//$fecha=$_REQUEST['fecha'];
$fecha=date("Y-m-d");
$exito=false;
$error=null;
$query_com="insert into comentarios(descripcion,fecha_creacion)values('$descr','$fecha')";
$exito_insert = $mysqli->query($query_com);
if($exito_insert){
    $com=$mysqli->insert_id;
    $query_rel_com_al="insert into rel_comentario_alumno(id_comentario,id_alumno,id_profesor) values('$com','$alumno','$prof')";
    $exito_insert1 = $mysqli->query($query_rel_com_al);
    if($exito_insert1){
        $query_rel_com_mat="insert into rel_comentario_materia(id_comentario,id_materia) values('$com','$materia')";
        $exito_insert2 = $mysqli->query($query_rel_com_mat);  
        if($exito_insert2){
            $exito=true;
        }else{
            $error= "Error al guardar la información3";
        }
    }else{
        $error= "Error al guardar la información2";
    }
}else{
    $error= "Error al guardar la información1";
}

$data = array(
    "exito" => $exito,
    "error" => $error
);

echo json_encode($data);
?>