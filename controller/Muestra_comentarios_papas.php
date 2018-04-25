<?php
include ('conexion.php');
$alumno= $_REQUEST['user'];
$id_alumno = array();
$comentarios = array();
$materias= array();
$query_comentarios="select id_comentario from rel_comentario_alumno where id_alumno='$alumno'";
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

$query_id_prof="select id_profesor from rel_comentario_alumno where id_alumno='$alumno'";
foreach($mysqli->query($query_id_prof) as $id_prof){
    foreach($id_prof as $id_p){
        $query_inf_prof="select nombre from usuario where usuario='$id_p'";
        foreach($mysqli->query($query_inf_prof) as $profesor){
             $id_profesor[]=$profesor;
        }  
    }
}

$data = array(
    'comentarios' => $comentarios,
    'profesores' => $id_profesor,
    'materias'=> $materias
);

$mysqli->close();
echo json_encode($data);
?>