<?php
    include ('conexion.php');
    function consulta($query,$mysqli){
        $consulta = $mysqli->query($query);
        $resultado = mysqli_fetch_array($consulta);
        return $resultado;
    }//*/
    //$user = $_REQUEST['usuario'];
    $curso = $_REQUEST['curso'];
    //variables de ayuda
    $fl=true;
    $error = "";
    $curso;
    $imagen = null;
    $video;

    $ejemplo = array();
    $ejercicios = array();
    $evaluacion = array();
    $respuestas_ejercicios = array();
    $respuestas_evaluacion = array();
    $imagenes_ejercicios = null;
    $imagenes_evaluacion = null;
    $relacion = array();
    $tmp;
    //consulta para sacar lel curso
    $query_curso = "select * from curso where id_curso=$curso";
    $curso = consulta($query_curso,$mysqli);
    if($curso){//si existe el curso entonces se obtiene la demás información, en caso contrario se regresa falso
        $id_curso = $curso['id_curso'];
        $query_video = "select * from rel_video_curso where id_curso = $id_curso";
        $video = consulta($query_video,$mysqli);
        if($video){
            $id_video = $video['id_video'];
            $query_video = "select * from video where id_video = $id_video";
            $video = consulta($query_video,$mysqli);
        }else{
            $query_imagen = "select * from rel_imagen_curso where id_curso = $id_curso";
            $imagen = consulta($query_imagen,$mysqli);
        }
        $query_ejemplo = "select * from rel_curso_ejemplo where id_curso = $id_curso";
        $info_ejemplo = consulta($query_ejemplo,$mysqli);
        $id_ejemplo = $info_ejemplo['id_ejemplo'];
        $retroalimentacion = $info_ejemplo['retroalimentacion'];
        $query_ejemplo = "select * from pregunta_ejemplo where id_pregunta_ejemplo = $id_ejemplo";
        $info_ejemplo = consulta($query_ejemplo,$mysqli);
        //sacando respuestas del ejemplo
        $query_relacion="select * from rel_ejemplos_respuestas where id_pregunta_ejemplo=$id_ejemplo";
        foreach ($mysqli->query($query_relacion) as $result) {
            $id_respuesta = $result['id_respuesta_ejemplo'];
            $query_relacion="select * from respuesta_ejemplo where id_respuesta_ejemplo=$id_respuesta";
            $respuesta_ejemplo = consulta($query_relacion,$mysqli);
            if($respuesta_ejemplo){
                $respuestas[]=$respuesta_ejemplo;
            }
        }
        $query_relacion="select * from rel_imagen_ejemplo where id_ejemplo=$id_ejemplo";
        $imagen_ejemplo = consulta($query_relacion,$mysqli);
        if($imagen_ejemplo){
            $id_imagen = $imagen_ejemplo['id_imagen'];
            $query_relacion="select ruta from imagen where id_imagen=$id_imagen";
            $imagen_ejemplo = consulta($query_relacion,$mysqli);
        }
        /*$query_ejemplo = "select * from rel_ejemplos_respuestas where id_pregunta_ejemplo = $id_ejemplo";
        $info_respuestas_ejemplo = consulta($query_ejemplo,$mysqli);//*/
        $ejemplo = array(
            'id' => $id_ejemplo,
            'pregunta' => $info_ejemplo['descripcion'],
            'retroalimentacion' => $retroalimentacion,
            'respuestas' => $respuestas,
            'imagen' => $imagen_ejemplo
        );
        
        //obtenemos ejercicios
        $query_relacion="select * from rel_curso_ejercicio where id_curso = $id_curso";
        foreach ($mysqli->query($query_relacion) as $result) {
            $id_ejercicio = $result['id_ejercicio'];
            $query_relacion="select * from pregunta_ejercicio where id_pregunta_ejercicio=$id_ejercicio";
            $pregunta = consulta($query_relacion,$mysqli);
            $id_pregunta = $pregunta['id_pregunta_ejercicio'];
            if($pregunta){
                $pregunta_ejercicios[]=$pregunta;//aqui se adjunta la pregunta al arreglo de ejercicios y se busca las respuestas
                $query_relacion="select * from rel_ejercicios_respuestas where id_pregunta_ejercicio = $id_pregunta";
                foreach ($mysqli->query($query_relacion) as $result2) {
                    $id_respuesta = $result2['id_respuesta_ejercicio'];
                    $query_relacion="select * from respuesta_ejercicio where id_respuesta_ejercicio=$id_respuesta";
                    $pregunta = consulta($query_relacion,$mysqli);
                    $tmp_respuesta_ejercicios[] = $pregunta;
                }
                $respuesta_ejercicios[]=$tmp_respuesta_ejercicios;
                unset($tmp_respuesta_ejercicios);
                //ahora buscamos las imagenes
                $query_relacion="select * from rel_imagen_ejercicio where id_ejercicio=$id_pregunta";
                foreach ($mysqli->query($query_relacion) as $result3) {
                    $id_imagen = $result3['id_imagen'];
                    $query_relacion="select ruta from imagen where id_imagen=$id_imagen";
                    $imagen_ej = consulta($query_relacion,$mysqli);
                    $imagenes_ejercicios[]=$imagen_ej;
                }
            }//*/
            
        }
        
        $ejercicios = array(
            'preguntas' => $pregunta_ejercicios,
            'respuestas' => $respuesta_ejercicios,
            'imagenes' => $imagenes_ejercicios
        );
        
        
        //obtenemos ejercicios
        $query_relacion="select * from rel_curso_evaluacion where id_curso = $id_curso";
        foreach ($mysqli->query($query_relacion) as $result) {
            $id_evaluacion = $result['id_evaluacion'];
            $query_relacion="select * from pregunta_evaluacion where id_pregunta_evaluacion=$id_evaluacion";
            $pregunta = consulta($query_relacion,$mysqli);
            $id_pregunta = $pregunta['id_pregunta_evaluacion'];
            if($pregunta){
                $pregunta_evaluacion[]=$pregunta;//aqui se adjunta la pregunta al arreglo de evaluaciones y se busca las respuestas
                $query_relacion="select * from rel_evaluacion_respuestas where id_pregunta_evaluacion = $id_pregunta";
                foreach ($mysqli->query($query_relacion) as $result2) {
                    $id_respuesta = $result2['id_respuesta_evaluacion'];
                    $query_relacion="select * from respuesta_evaluacion where id_respuesta_evaluacion=$id_respuesta";
                    $pregunta = consulta($query_relacion,$mysqli);
                    $tmp_respuesta_evaluacion[] = $pregunta;
                }
                $respuestas_evaluacion[]=$tmp_respuesta_evaluacion;
                unset($tmp_respuesta_evaluacion);
                //ahora buscamos las imagenes
                $query_relacion="select * from rel_imagen_evaluacion where id_evaluacion=$id_pregunta";
                foreach ($mysqli->query($query_relacion) as $result3) {
                    $id_imagen = $result3['id_imagen'];
                    $query_relacion="select ruta from imagen where id_imagen=$id_imagen";
                    $imagen_ev = consulta($query_relacion,$mysqli);
                    $imagenes_evaluacion[]=$imagen_ev;
                }
            }//*/
            $evaluaciones = array(
                'preguntas' => $pregunta_evaluacion,
                'respuestas' => $respuestas_evaluacion,
                'imagenes' => $imagenes_evaluacion
            );
        }
        
    }else{
        $fl=false;
    }
    $mysqli->close();
    $data = array(
        'query' => $query_relacion,
        'curso' => $curso,
        'video' => $video,
        'imagen' => $imagen,
        'ejemplo' => $ejemplo,
        'ejercicios' => $ejercicios,
        'evaluacion' => $evaluaciones,
        'error' => $error,
        "exito" => $fl
    );

  echo json_encode($data);

?>