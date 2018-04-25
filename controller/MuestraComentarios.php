<?php
include ('conexion.php');
$prof= $_REQUEST['user'];
$id_alumno = array();
$comentarios = array();
$materias= array();
$query_comentarios="select id_comentario from rel_comentario_alumno where id_profesor='$prof'";
foreach($mysqli->query($query_comentarios) as $id_comen){
    foreach($id_comen as $id_c){
        $query_comentario="select * from comentarios where id_comentario='$id_c'";
        foreach($mysqli->query($query_comentario) as $comentario){
            $comentarios[]=$comentario;
        }
        $query_mate="select id_materia from rel_comentario_materia where id_comentario='$id_c'";
        foreach($mysqli->query($query_mate) as $id_mat){
            //$id_mat[]=$id_mat;
            foreach($id_mat as $id){
                $query_inf_materia="select nombre_materia from materia where id_materia='$id'";
                foreach($mysqli->query($query_inf_materia) as $mat){
                    $materias[]=$mat;
                } 
            }
            
        }   
    }
}
$query_id_alum="select id_alumno from rel_comentario_alumno where id_profesor='$prof'";
foreach($mysqli->query($query_id_alum) as $id_alu){
    foreach($id_alu as $id_a){
        $query_inf_alumno="select nombre from usuario where usuario='$id_a'";
        foreach($mysqli->query($query_inf_alumno) as $alumno){
             $id_alumno[]=$alumno;
        }  
    }
}


$data = array(
    'comentarios' => $comentarios,
    'alumnos' => $id_alumno,
    'materias'=> $materias
);

$mysqli->close();
echo json_encode($data);
?>