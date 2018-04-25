<?php
include ('conexion.php');
$usu= $_REQUEST['user'];
$grup= $_REQUEST['grupo'];
$id_grupos = array();
$grupos = array();
$id_materias = array();
$materias = array();
$id_alumnos = array();
$alumnos = array();
$query_grupos="select id_grupo from rel_usuario_grupo where id_usuario='$usu'";

if($grup=='-1'){
   foreach($mysqli->query($query_grupos) as $id_grupo){
    foreach($id_grupo as $id){
        $query_inf_grupos="select * from grupo where id_grupo='$id'";
        foreach($mysqli->query($query_inf_grupos) as $grupo){
            $grupos[]=$grupo;
        }
    }
   }
    
  $data = array(
    'grupos' => $grupos
  );    
}else{
   $query_materias="select id_materia from rel_materia_grupo where id_grupo='$grup'";
   foreach($mysqli->query($query_materias) as $id_materia){
       foreach($id_materia as $id_m){
            $query_inf_materia="select * from materia where id_materia='$id_m'";
            foreach($mysqli->query($query_inf_materia) as $materia){
                 $materias[]=$materia;
            }  
        }
    }
    
    $query_alumnos="select id_usuario from rel_usuario_grupo where id_grupo='$grup'";
    foreach($mysqli->query($query_alumnos) as $id_alumno){
        foreach($id_alumno as $id_a){
            if($id_a != $usu ){ //para quitar al profesor
                $query_inf_alumnos="select * from usuario where usuario='$id_a'";
                foreach($mysqli->query($query_inf_alumnos) as $alumno){
                    $alumnos[]=$alumno;
                }  
            }
        }
    }
    
    $data = array(
        'materias' => $materias,
        'alumnos' => $alumnos
    );
    
}
$mysqli->close();
echo json_encode($data);
?>