<?php
    
    include ('conexion.php');
    include ('funciones.php');
    //$titulo = $_REQUEST['titulo'];
    //print_r($_REQUEST);
//----------Informacion del curso
    $titulo = $_REQUEST['titulo'];
    //obtencion de la imagen si es que hay
    $simagen_c = $_REQUEST['simagen_c'];
    if($simagen_c == 'true'){
        $imagen_curso = $_FILES['imagen_curso']['tmp_name'];
        $nombre_imagen_curso = $_FILES['imagen_curso']['name'];
    }
    //obtencion del video si es que hay
    $svideo_c = $_REQUEST['svideo_c'];
    if($svideo_c == 'true'){
        $video = $_REQUEST['video'];
    }
    $objetivo = $_REQUEST['objetivo'];
    $descripcion = $_REQUEST['descripcion'];
    $ejemplo = $_REQUEST['ejemplo'];
    
//---------Ejemplo
    $ejemplo = $_REQUEST['ejemplo'];
    $simagen_ejemplo = $_REQUEST['simagen_ejemplo'];
    if($simagen_ejemplo == 'true'){
        $imagen_ejemplo = $_FILES['imagen_ejemplo']['tmp_name'];
        $nombre_imagen_ejemplo = $_FILES['imagen_ejemplo']['name'];
    }
    //respuestas
    $r1_correcta_ejemplo = $_REQUEST['r1_correcta_ejemplo'];
    $r2_incorrecta_ejemplo = $_REQUEST['r2_incorrecta_ejemplo'];
    $r3_incorrecta_ejemplo = $_REQUEST['r3_incorrecta_ejemplo'];
    $r4_incorrecta_ejemplo = $_REQUEST['r4_incorrecta_ejemplo'];
    $retroalimentacion_ejemplo = $_REQUEST['retroalimentacion_ejemplo'];

//ejercicios
    //ejercicio 1
    $ejercicio_1 = $_REQUEST['ejercicio_1'];
    $simagen_ejercicio1 = $_REQUEST['simagen_ejercicio1'];
    if($simagen_ejercicio1 == 'true'){
        $imagen_ejercicio1 = $_FILES['imagen_ejercicio1']['tmp_name'];
        $nombre_imagen_ejercicio1 = $_FILES['imagen_ejercicio1']['name'];
    }
    //ejercicios
    $r1_correcta_ejercicio1 = $_REQUEST['r1_correcta_ejercicio1'];
    $r2_incorrecta_ejercicio1 = $_REQUEST['r2_incorrecta_ejercicio1'];
    $r3_incorrecta_ejercicio1 = $_REQUEST['r3_incorrecta_ejercicio1'];
    $r4_incorrecta_ejercicio1 = $_REQUEST['r4_incorrecta_ejercicio1'];
    //retroalimentaciones
    $retroalimentacion_p1_e1 = $_REQUEST['retroalimentacion_p1_e1'];
    $retroalimentacion_p2_e1 = $_REQUEST['retroalimentacion_p2_e1'];
    $retroalimentacion_p3_e1 = $_REQUEST['retroalimentacion_p3_e1'];
    $retroalimentacion_p4_e1 = $_REQUEST['retroalimentacion_p4_e1'];
        
    //ejercicio 2
    $ejercicio_2 = $_REQUEST['ejercicio_2'];
    $simagen_ejercicio2 = $_REQUEST['simagen_ejercicio2'];
    if($simagen_ejercicio2 == 'true'){
        $imagen_ejercicio2 = $_FILES['imagen_ejercicio2']['tmp_name'];
        $nombre_imagen_ejercicio2 = $_FILES['imagen_ejercicio2']['name'];
    }
    $r1_correcta_ejercicio2 = $_REQUEST['r1_correcta_ejercicio2'];
    $r2_incorrecta_ejercicio2 = $_REQUEST['r2_incorrecta_ejercicio2'];
    $r3_incorrecta_ejercicio2 = $_REQUEST['r3_incorrecta_ejercicio2'];
    $r4_incorrecta_ejercicio2 = $_REQUEST['r4_incorrecta_ejercicio2'];
    $retroalimentacion_p1_e2 = $_REQUEST['retroalimentacion_p1_e2'];
    $retroalimentacion_p2_e2 = $_REQUEST['retroalimentacion_p2_e2'];
    $retroalimentacion_p3_e2 = $_REQUEST['retroalimentacion_p3_e2'];
    $retroalimentacion_p4_e2 = $_REQUEST['retroalimentacion_p4_e2'];
        
    //ejercicio 3
    $ejercicio_3 = $_REQUEST['ejercicio_3'];
    $simagen_ejercicio3 = $_REQUEST['simagen_ejercicio3'];
    if($simagen_ejercicio3 == 'true'){
        $imagen_ejercicio3 = $_FILES['imagen_ejercicio3']['tmp_name'];
        $nombre_imagen_ejercicio3 = $_FILES['imagen_ejercicio3']['name'];
    }
    $r1_correcta_ejercicio3 = $_REQUEST['r1_correcta_ejercicio3'];
    $r2_incorrecta_ejercicio3 = $_REQUEST['r2_incorrecta_ejercicio3'];
    $r3_incorrecta_ejercicio3 = $_REQUEST['r3_incorrecta_ejercicio3'];
    $r4_incorrecta_ejercicio3 = $_REQUEST['r4_incorrecta_ejercicio3'];
    $retroalimentacion_p1_e3 = $_REQUEST['retroalimentacion_p1_e3'];
    $retroalimentacion_p2_e3 = $_REQUEST['retroalimentacion_p2_e3'];
    $retroalimentacion_p3_e3 = $_REQUEST['retroalimentacion_p3_e3'];
    $retroalimentacion_p4_e3 = $_REQUEST['retroalimentacion_p4_e3'];
        
    //ejercicio 4
    $ejercicio_4 = $_REQUEST['ejercicio_4'];
    $simagen_ejercicio4 = $_REQUEST['simagen_ejercicio4'];
    if($simagen_ejercicio4 == 'true'){
        $imagen_ejercicio4 = $_FILES['imagen_ejercicio4']['tmp_name'];
        $nombre_imagen_ejercicio4 = $_FILES['imagen_ejercicio4']['name'];
    }
    $r1_correcta_ejercicio4 = $_REQUEST['r1_correcta_ejercicio4'];
    $r2_incorrecta_ejercicio4 = $_REQUEST['r2_incorrecta_ejercicio4'];
    $r3_incorrecta_ejercicio4 = $_REQUEST['r3_incorrecta_ejercicio4'];
    $r4_incorrecta_ejercicio4 = $_REQUEST['r4_incorrecta_ejercicio4'];
    $retroalimentacion_p1_e4 = $_REQUEST['retroalimentacion_p1_e4'];
    $retroalimentacion_p2_e4 = $_REQUEST['retroalimentacion_p2_e4'];
    $retroalimentacion_p3_e4 = $_REQUEST['retroalimentacion_p3_e4'];
    $retroalimentacion_p4_e4 = $_REQUEST['retroalimentacion_p4_e4'];
        
    //ejercicio 5
    $ejercicio_5 = $_REQUEST['ejercicio_5'];
    $simagen_ejercicio5 = $_REQUEST['simagen_ejercicio5'];
    if($simagen_ejercicio5 == 'true'){
        $imagen_ejercicio5 = $_FILES['imagen_ejercicio5']['tmp_name'];
        $nombre_imagen_ejercicio5 = $_FILES['imagen_ejercicio5']['name'];
    }
    $r1_correcta_ejercicio5 = $_REQUEST['r1_correcta_ejercicio5'];
    $r2_incorrecta_ejercicio5 = $_REQUEST['r2_incorrecta_ejercicio5'];
    $r3_incorrecta_ejercicio5 = $_REQUEST['r3_incorrecta_ejercicio5'];
    $r4_incorrecta_ejercicio5 = $_REQUEST['r4_incorrecta_ejercicio5'];
    $retroalimentacion_p1_e5 = $_REQUEST['retroalimentacion_p1_e5'];
    $retroalimentacion_p2_e5 = $_REQUEST['retroalimentacion_p2_e5'];
    $retroalimentacion_p3_e5 = $_REQUEST['retroalimentacion_p3_e5'];
    $retroalimentacion_p4_e5 = $_REQUEST['retroalimentacion_p4_e5'];

//Evaluaciones
    //Evaluacion 1
    $evaluacion1 = $_REQUEST['evaluacion1'];
    $simagen_evaluacion1 = $_REQUEST['simagen_evaluacion1'];
    if($simagen_evaluacion1 == 'true'){
        $imagen_evaluacion1 = $_FILES['imagen_evaluacion1']['tmp_name'];
        $nombre_imagen_evaluacion1 = $_FILES['imagen_evaluacion1']['name'];
    }
    $r1_evaluacion1 = $_REQUEST['r1_evaluacion1'];
    $r2_evaluacion1 = $_REQUEST['r2_evaluacion1'];
    $r3_evaluacion1 = $_REQUEST['r3_evaluacion1'];
    $r4_evaluacion1 = $_REQUEST['r4_evaluacion1'];

    //Evaluacion 2
    $evaluacion2 = $_REQUEST['evaluacion2'];
    $simagen_evaluacion2 = $_REQUEST['simagen_evaluacion2'];
    if($simagen_evaluacion2 == 'true'){
        $imagen_evaluacion2 = $_FILES['imagen_evaluacion2']['tmp_name'];
        $nombre_imagen_evaluacion2 = $_FILES['imagen_evaluacion2']['name'];
    }
    $r1_evaluacion2 = $_REQUEST['r1_evaluacion2'];
    $r2_evaluacion2 = $_REQUEST['r2_evaluacion2'];
    $r3_evaluacion2 = $_REQUEST['r3_evaluacion2'];
    $r4_evaluacion2 = $_REQUEST['r4_evaluacion2'];
    
    //Evaluacion 3
    $evaluacion3 = $_REQUEST['evaluacion3'];
    $simagen_evaluacion3 = $_REQUEST['simagen_evaluacion3'];
    if($simagen_evaluacion3 == 'true'){
        $imagen_evaluacion3 = $_FILES['imagen_evaluacion3']['tmp_name'];
        $nombre_imagen_evaluacion3 = $_FILES['imagen_evaluacion3']['name'];
    }
    $r1_evaluacion3 = $_REQUEST['r1_evaluacion3'];
    $r2_evaluacion3 = $_REQUEST['r2_evaluacion3'];
    $r3_evaluacion3 = $_REQUEST['r3_evaluacion3'];
    $r4_evaluacion3 = $_REQUEST['r4_evaluacion3'];
    
    //Evaluacion 4
    $evaluacion4 = $_REQUEST['evaluacion4'];
    $simagen_evaluacion4 = $_REQUEST['simagen_evaluacion4'];
    if($simagen_evaluacion4 == 'true'){
        $imagen_evaluacion4 = $_FILES['imagen_evaluacion4']['tmp_name'];
        $nombre_imagen_evaluacion4 = $_FILES['imagen_evaluacion4']['name'];
    }
    $r1_evaluacion4 = $_REQUEST['r1_evaluacion4'];
    $r2_evaluacion4 = $_REQUEST['r2_evaluacion4'];
    $r3_evaluacion4 = $_REQUEST['r3_evaluacion4'];
    $r4_evaluacion4 = $_REQUEST['r4_evaluacion4'];
    
    //Evaluacion 5
    $evaluacion5 = $_REQUEST['evaluacion5'];
    $simagen_evaluacion5 = $_REQUEST['simagen_evaluacion5'];
    if($simagen_evaluacion5 == 'true'){
        $imagen_evaluacion5 = $_FILES['imagen_evaluacion5']['tmp_name'];
        $nombre_imagen_evaluacion5 = $_FILES['imagen_evaluacion5']['name'];
    }
    $r1_evaluacion5 = $_REQUEST['r1_evaluacion5'];
    $r2_evaluacion5 = $_REQUEST['r2_evaluacion5'];
    $r3_evaluacion5 = $_REQUEST['r3_evaluacion5'];
    $r4_evaluacion5 = $_REQUEST['r4_evaluacion5'];

//insertando curso
    $insert_curso = "INSERT INTO curso(titulo,objetivo,descripcion)values('$titulo','$objetivo','$descripcion')";
    //echo $insert_curso;
    $exito_curso = $mysqli->query($insert_curso);
    $id_curso=$mysqli->insert_id;
    if($simagen_c == 'true'){
        $path = "img/cursos/".$id_curso.".".extension_imagen($nombre_imagen_curso);
        $query_img_curso = "INSERT INTO imagen(ruta)values('$path')";
        //echo $insert_curso;
        $exito_img_curso = $mysqli->query($query_img_curso);
        $id_imagen=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_curso(id_imagen,id_curso)values($id_imagen,$id_curso)";
        $exito_rel_img_curso = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_curso){
            copy($imagen_curso,"../".$path);
        }
    }
    if($svideo_c == 'true'){
        $query_video_curso = "INSERT INTO video(url)values('$video')";
        //echo $insert_curso;
        $exito_video_curso = $mysqli->query($query_video_curso);
        $id_video=$mysqli->insert_id;
        $query_rel_video = "INSERT INTO rel_video_curso(id_video,id_curso)values($id_video,$id_curso)";
        $exito_rel_video_curso = $mysqli->query($query_rel_video);
    }
    $id_curso=$mysqli->insert_id;
//insertando ejemplo
    $insert_ejemplo = "INSERT INTO pregunta_ejemplo(descripcion)values('$ejemplo')";
    //echo $insert_curso;
    $exito_ejemplo = $mysqli->query($insert_ejemplo);
    $id_ejemplo=$mysqli->insert_id; //obteniendo id del ejemplo
    if($simagen_ejemplo == 'true'){
        $path = "img/ejemplos/".$id_ejemplo.".".extension_imagen($nombre_imagen_ejemplo);
        $query_img_ejemplo = "INSERT INTO imagen(ruta)values('$path')";
        //echo $insert_curso;
        $exito_img_ejemplo = $mysqli->query($query_img_ejemplo);
        $id_imagen=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejemplo(id_imagen,id_ejemplo)values($id_imagen,$id_ejemplo)";
        $exito_rel_img_ejemplo = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejemplo){
            copy($imagen_ejemplo,"../".$path);
        }
    }
    $insert_rel_curso_ejemplo = "INSERT INTO rel_curso_ejemplo(id_curso,id_ejemplo,retroalimentacion)values($id_curso,$id_ejemplo,'$retroalimentacion_ejemplo')";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejemplo);

    //respuesta 1
    $insert_r1_ejemplo = "INSERT INTO respuesta_ejemplo(texto_respuesta,estatus)values('$r1_correcta_ejemplo','correcta')";
    $exito_r1_ejemplo = $mysqli->query($insert_r1_ejemplo);
    $id_r1_ejemplo=$mysqli->insert_id;
    $insert_rel_ej1_r1 = "INSERT INTO rel_ejemplos_respuestas(id_pregunta_ejemplo,id_respuesta_ejemplo)values('$id_ejemplo','$id_r1_ejemplo')";
    $exito_rel_ej1_r1 = $mysqli->query($insert_rel_ej1_r1);
    $id_rel_ej1_r1=$mysqli->insert_id;

    //respuesta 2
    $insert_r2_ejemplo = "INSERT INTO respuesta_ejemplo(texto_respuesta,estatus)values('$r2_incorrecta_ejemplo','incorrecta')";
    $exito_r2_ejemplo = $mysqli->query($insert_r2_ejemplo);
    $id_r2_ejemplo=$mysqli->insert_id;
    $insert_rel_ej1_r2 = "INSERT INTO rel_ejemplos_respuestas(id_pregunta_ejemplo,id_respuesta_ejemplo)values('$id_ejemplo','$id_r2_ejemplo')";
    $exito_rel_ej1_r2 = $mysqli->query($insert_rel_ej1_r2);
    $id_rel_ej1_r2=$mysqli->insert_id;

    //respuesta 3
    $insert_r3_ejemplo = "INSERT INTO respuesta_ejemplo(texto_respuesta,estatus)values('$r3_incorrecta_ejemplo','incorrecta')";
    $exito_r3_ejemplo = $mysqli->query($insert_r3_ejemplo);
    $id_r3_ejemplo=$mysqli->insert_id;
    $insert_rel_ej1_r3 = "INSERT INTO rel_ejemplos_respuestas(id_pregunta_ejemplo,id_respuesta_ejemplo)values('$id_ejemplo','$id_r3_ejemplo')";
    $exito_rel_ej1_r3 = $mysqli->query($insert_rel_ej1_r3);
    $id_rel_ej1_r3=$mysqli->insert_id;

    //respuesta 4
    $insert_r4_ejemplo = "INSERT INTO respuesta_ejemplo(texto_respuesta,estatus)values('$r4_incorrecta_ejemplo','incorrecta')";
    $exito_r4_ejemplo = $mysqli->query($insert_r4_ejemplo);
    $id_r4_ejemplo=$mysqli->insert_id;
    $insert_rel_ej1_r4 = "INSERT INTO rel_ejemplos_respuestas(id_pregunta_ejemplo,id_respuesta_ejemplo)values('$id_ejemplo','$id_r4_ejemplo')";
    $exito_rel_ej1_r4 = $mysqli->query($insert_rel_ej1_r4);
    $id_rel_ej1_r4=$mysqli->insert_id;

//insertar ejercicios
    //ejercicio 1
    $insert_ejercicio1 = "INSERT INTO pregunta_ejercicio(descripcion)values('$ejercicio_1')";
    //echo $insert_ejercicio1;
    $exito_ejemplo = $mysqli->query($insert_ejercicio1);
    $id_ejercicio1=$mysqli->insert_id;
    //insertando su imagen
    if($simagen_ejercicio1 == 'true'){
        $path = "img/ejercicios/".$id_ejercicio1.".".extension_imagen($nombre_imagen_ejercicio1);
        $query_img_ejercicio1 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_ejercicio1 = $mysqli->query($query_img_ejercicio1);
        $id_imagen_ej1=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejercicio(id_imagen,id_ejercicio) values($id_imagen_ej1,$id_ejercicio1)";
        $exito_rel_img_ejercicio1 = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejercicio1){
            copy($imagen_ejercicio1,"../".$path);
        }
    }
    $insert_rel_curso_ejercicio = "INSERT INTO rel_curso_ejercicio(id_curso,id_ejercicio)values($id_curso,$id_ejercicio1)";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejercicio);

    //respuestas del ejercicio 1
    //respuesta 1
    $insert_r1_ejercicio1 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r1_correcta_ejercicio1','correcta','$retroalimentacion_p1_e1')";
    //echo $insert_ejercicio1;
    $exito_r1_ejercicio1 = $mysqli->query($insert_r1_ejercicio1);
    $id_r1_ejercicio1=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio1,$id_r1_ejercicio1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);

    //respuesta 2
    $insert_r2_ejercicio1 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r2_incorrecta_ejercicio1','incorrecta','$retroalimentacion_p2_e1')";
    //echo $insert_ejercicio1;
    $exito_r2_ejercicio1 = $mysqli->query($insert_r2_ejercicio1);
    $id_r2_ejercicio1=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio1,$id_r2_ejercicio1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 3
    $insert_r3_ejercicio1 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r3_incorrecta_ejercicio1','incorrecta','$retroalimentacion_p3_e1')";
    //echo $insert_ejercicio1;
    $exito_r3_ejercicio1 = $mysqli->query($insert_r3_ejercicio1);
    $id_r3_ejercicio1=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio1,$id_r3_ejercicio1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 4
    $insert_r4_ejercicio1 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r4_incorrecta_ejercicio1','incorrecta','$retroalimentacion_p4_e1')";
    //echo $insert_ejercicio1;
    $exito_r4_ejercicio1 = $mysqli->query($insert_r4_ejercicio1);
    $id_r4_ejercicio1=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio1,$id_r4_ejercicio1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);//*/
    
    //ejercicio 2
    $insert_ejercicio2 = "INSERT INTO pregunta_ejercicio(descripcion)values('$ejercicio_2')";
        //echo $insert_ejercicio1;
        $exito_ejemplo = $mysqli->query($insert_ejercicio2);
        $id_ejercicio2=$mysqli->insert_id;
        //insertando su imagen
        if($simagen_ejercicio2 == 'true'){
        $path = "img/ejercicios/".$id_ejercicio2.".".extension_imagen($nombre_imagen_ejercicio2);
        $query_img_ejercicio2 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_ejercicio2 = $mysqli->query($query_img_ejercicio2);
        $id_imagen_ej2=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejercicio(id_imagen,id_ejercicio )values($id_imagen_ej2,$id_ejercicio2)";
        $exito_rel_img_ejercicio2 = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejercicio2){
            copy($imagen_ejercicio2,"../".$path);
        }
    }
    $insert_rel_curso_ejercicio = "INSERT INTO rel_curso_ejercicio(id_curso,id_ejercicio)values($id_curso,$id_ejercicio2)";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejercicio);

    //respuestas del ejercicio 2
    //respuesta 1
    $insert_r1_ejercicio2 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r1_correcta_ejercicio2','correcta','$retroalimentacion_p1_e2')";
    //echo $insert_ejercicio1;
    $exito_r1_ejercicio2 = $mysqli->query($insert_r1_ejercicio2);
    $id_r1_ejercicio2=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio2,$id_r1_ejercicio2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 2
    $insert_r2_ejercicio2 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r2_incorrecta_ejercicio2','incorrecta','$retroalimentacion_p2_e2')";
    //echo $insert_ejercicio1;
    $exito_r2_ejercicio2 = $mysqli->query($insert_r2_ejercicio2);
    $id_r2_ejercicio2=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio2,$id_r2_ejercicio2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 3
    $insert_r3_ejercicio2 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r3_incorrecta_ejercicio2','incorrecta','$retroalimentacion_p3_e2')";
    //echo $insert_ejercicio1;
    $exito_r3_ejercicio2 = $mysqli->query($insert_r3_ejercicio2);
    $id_r3_ejercicio2=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio2,$id_r3_ejercicio2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 4
    $insert_r4_ejercicio2 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r4_incorrecta_ejercicio2','incorrecta','$retroalimentacion_p4_e2')";
    //echo $insert_ejercicio1;
    $exito_r4_ejercicio2 = $mysqli->query($insert_r4_ejercicio2);
    $id_r4_ejercicio2=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio2,$id_r4_ejercicio2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);//*/

    //ejercicio 3
    $insert_ejercicio3 = "INSERT INTO pregunta_ejercicio(descripcion)values('$ejercicio_3')";
        //echo $insert_ejercicio3;
        $exito_ejemplo = $mysqli->query($insert_ejercicio3);
        $id_ejercicio3=$mysqli->insert_id;
        //insertando su imagen
        if($simagen_ejercicio3 == 'true'){
        $path = "img/ejercicios/".$id_ejercicio3.".".extension_imagen($nombre_imagen_ejercicio3);
        $query_img_ejercicio3 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_ejercicio3 = $mysqli->query($query_img_ejercicio3);
        $id_imagen_ej3=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejercicio(id_imagen,id_ejercicio )values($id_imagen_ej3,$id_ejercicio3)";
        $exito_rel_img_ejercicio3 = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejercicio3){
            copy($imagen_ejercicio3,"../".$path);
        }
    }
    $insert_rel_curso_ejercicio = "INSERT INTO rel_curso_ejercicio(id_curso,id_ejercicio)values($id_curso,$id_ejercicio3)";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejercicio);
    
    //respuestas del ejercicio 3
    //respuesta 1
    $insert_r1_ejercicio3 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r1_correcta_ejercicio3','correcta','$retroalimentacion_p1_e3')";
    //echo $insert_ejercicio1;
    $exito_r1_ejercicio3 = $mysqli->query($insert_r1_ejercicio3);
    $id_r1_ejercicio3=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio3,$id_r1_ejercicio3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 2
    $insert_r2_ejercicio3 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r2_incorrecta_ejercicio3','incorrecta','$retroalimentacion_p2_e3')";
    //echo $insert_ejercicio1;
    $exito_r2_ejercicio3 = $mysqli->query($insert_r2_ejercicio3);
    $id_r2_ejercicio3=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio3,$id_r2_ejercicio3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 3
    $insert_r3_ejercicio3 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r3_incorrecta_ejercicio3','incorrecta','$retroalimentacion_p3_e3')";
    //echo $insert_ejercicio1;
    $exito_r3_ejercicio3 = $mysqli->query($insert_r3_ejercicio3);
    $id_r3_ejercicio3=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio3,$id_r3_ejercicio3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 4
    $insert_r4_ejercicio3 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r4_incorrecta_ejercicio3','incorrecta','$retroalimentacion_p4_e3')";
    //echo $insert_ejercicio1;
    $exito_r4_ejercicio3 = $mysqli->query($insert_r4_ejercicio3);
    $id_r4_ejercicio3=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio3,$id_r4_ejercicio3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);//*/

    //ejercicio 4
    $insert_ejercicio4 = "INSERT INTO pregunta_ejercicio(descripcion)values('$ejercicio_4')";
        //echo $insert_ejercicio4;
        $exito_ejemplo = $mysqli->query($insert_ejercicio4);
        $id_ejercicio4=$mysqli->insert_id;
        //insertando su imagen
        if($simagen_ejercicio4 == 'true'){
        $path = "img/ejercicios/".$id_ejercicio4.".".extension_imagen($nombre_imagen_ejercicio4);
        $query_img_ejercicio4 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_ejercicio4 = $mysqli->query($query_img_ejercicio4);
        $id_imagen_ej4=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejercicio(id_imagen,id_ejercicio )values($id_imagen_ej4,$id_ejercicio4)";
        $exito_rel_img_ejercicio4 = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejercicio4){
            copy($imagen_ejercicio4,"../".$path);
        }
    }
    $insert_rel_curso_ejercicio = "INSERT INTO rel_curso_ejercicio(id_curso,id_ejercicio)values($id_curso,$id_ejercicio4)";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejercicio);
    
    //respuestas del ejercicio 4
    //respuesta 1
    $insert_r1_ejercicio4 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r1_correcta_ejercicio4','correcta','$retroalimentacion_p1_e4')";
    //echo $insert_ejercicio1;
    $exito_r1_ejercicio4 = $mysqli->query($insert_r1_ejercicio4);
    $id_r1_ejercicio4=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio4,$id_r1_ejercicio4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 2
    $insert_r2_ejercicio4 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r2_incorrecta_ejercicio4','incorrecta','$retroalimentacion_p2_e4')";
    //echo $insert_ejercicio1;
    $exito_r2_ejercicio4 = $mysqli->query($insert_r2_ejercicio4);
    $id_r2_ejercicio4=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio4,$id_r2_ejercicio4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 3
    $insert_r3_ejercicio4 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r3_incorrecta_ejercicio4','incorrecta','$retroalimentacion_p3_e4')";
    //echo $insert_ejercicio1;
    $exito_r3_ejercicio4 = $mysqli->query($insert_r3_ejercicio4);
    $id_r3_ejercicio4=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio4,$id_r3_ejercicio4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 4
    $insert_r4_ejercicio4 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r4_incorrecta_ejercicio4','incorrecta','$retroalimentacion_p4_e4')";
    //echo $insert_ejercicio1;
    $exito_r4_ejercicio4 = $mysqli->query($insert_r4_ejercicio4);
    $id_r4_ejercicio4=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio4,$id_r4_ejercicio4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);//*/

    //ejercicio 5
    $insert_ejercicio5 = "INSERT INTO pregunta_ejercicio(descripcion)values('$ejercicio_5')";
        //echo $insert_ejercicio4;
        $exito_ejemplo = $mysqli->query($insert_ejercicio5);
        $id_ejercicio5=$mysqli->insert_id;
        //insertando su imagen
        if($simagen_ejercicio5 == 'true'){
        $path = "img/ejercicios/".$id_ejercicio5.".".extension_imagen($nombre_imagen_ejercicio5);
        $query_img_ejercicio5 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_ejercicio5 = $mysqli->query($query_img_ejercicio5);
        $id_imagen_ej5=$mysqli->insert_id;
        $query_rel_imagen = "INSERT INTO rel_imagen_ejercicio(id_imagen,id_ejercicio )values($id_imagen_ej5,$id_ejercicio5)";
        $exito_rel_img_ejercicio5 = $mysqli->query($query_rel_imagen);
        if($exito_rel_img_ejercicio5){
            copy($imagen_ejercicio5,"../".$path);
        }
    }
    $insert_rel_curso_ejercicio = "INSERT INTO rel_curso_ejercicio(id_curso,id_ejercicio)values($id_curso,$id_ejercicio5)";
    //echo $insert_curso;
    $exito_rel_curso_ejemplo = $mysqli->query($insert_rel_curso_ejercicio);
    
    //respuestas del ejercicio 5
    //respuesta 1
    $insert_r1_ejercicio5 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r1_correcta_ejercicio5','correcta','$retroalimentacion_p1_e5')";
    //echo $insert_ejercicio5;
    $exito_r1_ejercicio5 = $mysqli->query($insert_r1_ejercicio5);
    $id_r1_ejercicio5=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio5,$id_r1_ejercicio5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 2
    $insert_r2_ejercicio5 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r2_incorrecta_ejercicio5','incorrecta','$retroalimentacion_p2_e5')";
    //echo $insert_ejercicio1;
    $exito_r2_ejercicio5 = $mysqli->query($insert_r2_ejercicio5);
    $id_r2_ejercicio5=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio5,$id_r2_ejercicio5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 3
    $insert_r3_ejercicio5 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r3_incorrecta_ejercicio5','incorrecta','$retroalimentacion_p3_e5')";
    //echo $insert_ejercicio1;
    $exito_r3_ejercicio5 = $mysqli->query($insert_r3_ejercicio5);
    $id_r3_ejercicio5=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio5,$id_r3_ejercicio5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);
    
    //respuesta 4
    $insert_r4_ejercicio5 = "INSERT INTO respuesta_ejercicio(texto_respuesta,estatus,retroalimentacion)values('$r4_incorrecta_ejercicio5','incorrecta','$retroalimentacion_p4_e5')";
    //echo $insert_ejercicio1;
    $exito_r4_ejercicio5 = $mysqli->query($insert_r4_ejercicio5);
    $id_r4_ejercicio5=$mysqli->insert_id;
    //relacion entre esta respuesta y el ejercicio
    $insert_rel_ejercicios_respuestas = "INSERT INTO rel_ejercicios_respuestas(id_pregunta_ejercicio,id_respuesta_ejercicio)values($id_ejercicio5,$id_r4_ejercicio5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_ejercicios_respuestas);//*/
    //fin de los ejercicios ::´D

//Evalueciones
    //Evaluacion 1
    $insert_evaluacion1 = "INSERT INTO pregunta_evaluacion(descripcion)values('$evaluacion1')";
    $exito_evaluacion1 = $mysqli->query($insert_evaluacion1);
    $id_evaluacion1=$mysqli->insert_id;
    if($simagen_evaluacion1 == 'true'){
        $path = "img/evaluaciones/".$id_evaluacion1.".".extension_imagen($nombre_imagen_evaluacion1);
        $query_img_evaluacion1 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_evaluacion1 = $mysqli->query($query_img_evaluacion1);
        $id_imagen_ev1=$mysqli->insert_id;
        $query_rel_evaluacion = "INSERT INTO rel_imagen_evaluacion(id_imagen,id_evaluacion )values($id_imagen_ev1,$id_evaluacion1)";
        $exito_rel_img_evaluacion1 = $mysqli->query($query_rel_evaluacion);
        if($exito_rel_img_evaluacion1){
            copy($imagen_evaluacion1,"../".$path);
        }
    }
    $insert_rel_curso_evaluacion = "INSERT INTO rel_curso_evaluacion(id_curso,id_evaluacion)values($id_curso,$id_evaluacion1)";
    //echo $insert_curso;
    $exito_rel_curso_evaluacion = $mysqli->query($insert_rel_curso_evaluacion);
    
    //respuestas de la evaluacion 1
    //respuesta 1
    $insert_r1_evaluacion1 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r1_evaluacion1','correcta')";
    $exito_rel_insert_r1_evaluacion1 = $mysqli->query($insert_r1_evaluacion1);
    $id_r1_evaluacion1=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion1,$id_r1_evaluacion1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 2
    $insert_r2_evaluacion1 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r2_evaluacion1','incorrecta')";
    $exito_rel_insert_r2_evaluacion1 = $mysqli->query($insert_r2_evaluacion1);
    $id_r2_evaluacion1=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion1,$id_r2_evaluacion1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 3
    $insert_r3_evaluacion1 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r3_evaluacion1','incorrecta')";
    $exito_rel_insert_r3_evaluacion1 = $mysqli->query($insert_r3_evaluacion1);
    $id_r3_evaluacion1=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion1,$id_r3_evaluacion1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r4_evaluacion1 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r4_evaluacion1','incorrecta')";
    $exito_rel_insert_r4_evaluacion1 = $mysqli->query($insert_r4_evaluacion1);
    $id_r4_evaluacion1=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion1,$id_r4_evaluacion1)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//*/
    

    //Evaluacion 2
    $insert_evaluacion2 = "INSERT INTO pregunta_evaluacion(descripcion)values('$evaluacion2')";
    $exito_evaluacion2 = $mysqli->query($insert_evaluacion2);
    $id_evaluacion2=$mysqli->insert_id;
    if($simagen_evaluacion2 == 'true'){
        $path = "img/evaluaciones/".$id_evaluacion2.".".extension_imagen($nombre_imagen_evaluacion2);
        $query_img_evaluacion2 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_evaluacion2 = $mysqli->query($query_img_evaluacion2);
        $id_imagen_ev2=$mysqli->insert_id;
        $query_rel_evaluacion = "INSERT INTO rel_imagen_evaluacion(id_imagen,id_evaluacion )values($id_imagen_ev2,$id_evaluacion2)";
        $exito_rel_img_evaluacion2 = $mysqli->query($query_rel_evaluacion);
        if($exito_rel_img_evaluacion2){
            copy($imagen_evaluacion2,"../".$path);
        }
    }
    $insert_rel_curso_evaluacion = "INSERT INTO rel_curso_evaluacion(id_curso,id_evaluacion)values($id_curso,$id_evaluacion2)";
    //echo $insert_curso;
    $exito_rel_curso_evaluacion = $mysqli->query($insert_rel_curso_evaluacion);
    
    //respuestas de la evaluacion 2
    //respuesta 1
    $insert_r1_evaluacion2 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r1_evaluacion2','correcta')";
    $exito_rel_insert_r1_evaluacion2 = $mysqli->query($insert_r1_evaluacion2);
    $id_r1_evaluacion2=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion2,$id_r1_evaluacion2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 2
    $insert_r2_evaluacion2 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r2_evaluacion2','incorrecta')";
    $exito_rel_insert_r2_evaluacion2 = $mysqli->query($insert_r2_evaluacion2);
    $id_r2_evaluacion2=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion2,$id_r2_evaluacion2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 3
    $insert_r3_evaluacion2 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r3_evaluacion2','incorrecta')";
    $exito_rel_insert_r3_evaluacion2 = $mysqli->query($insert_r3_evaluacion2);
    $id_r3_evaluacion2=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion2,$id_r3_evaluacion2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r4_evaluacion2 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r4_evaluacion2','incorrecta')";
    $exito_rel_insert_r4_evaluacion2 = $mysqli->query($insert_r4_evaluacion2);
    $id_r4_evaluacion2=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion2,$id_r4_evaluacion2)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//*/
    
    //Evaluacion 3
    $insert_evaluacion3 = "INSERT INTO pregunta_evaluacion(descripcion)values('$evaluacion3')";
    $exito_evaluacion3 = $mysqli->query($insert_evaluacion3);
    $id_evaluacion3=$mysqli->insert_id;
    if($simagen_evaluacion3 == 'true'){
        $path = "img/evaluaciones/".$id_evaluacion3.".".extension_imagen($nombre_imagen_evaluacion3);
        $query_img_evaluacion3 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_evaluacion3 = $mysqli->query($query_img_evaluacion3);
        $id_imagen_ev3=$mysqli->insert_id;
        $query_rel_evaluacion = "INSERT INTO rel_imagen_evaluacion(id_imagen,id_evaluacion )values($id_imagen_ev3,$id_evaluacion3)";
        $exito_rel_img_evaluacion3 = $mysqli->query($query_rel_evaluacion);
        if($exito_rel_img_evaluacion3){
            copy($imagen_evaluacion3,"../".$path);
        }
    }
    $insert_rel_curso_evaluacion = "INSERT INTO rel_curso_evaluacion(id_curso,id_evaluacion)values($id_curso,$id_evaluacion3)";
    //echo $insert_curso;
    $exito_rel_curso_evaluacion = $mysqli->query($insert_rel_curso_evaluacion);
    
    //respuestas de la evaluacion 3
    //respuesta 1
    $insert_r1_evaluacion3 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r1_evaluacion3','correcta')";
    $exito_rel_insert_r1_evaluacion3 = $mysqli->query($insert_r1_evaluacion3);
    $id_r1_evaluacion3=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion3,$id_r1_evaluacion3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 2
    $insert_r2_evaluacion3 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r2_evaluacion3','incorrecta')";
    $exito_rel_insert_r2_evaluacion3 = $mysqli->query($insert_r2_evaluacion3);
    $id_r2_evaluacion3=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion3,$id_r2_evaluacion3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 3
    $insert_r3_evaluacion3 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r3_evaluacion3','incorrecta')";
    $exito_rel_insert_r3_evaluacion3 = $mysqli->query($insert_r3_evaluacion3);
    $id_r3_evaluacion3=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion3,$id_r3_evaluacion3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r4_evaluacion3 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r4_evaluacion3','incorrecta')";
    $exito_rel_insert_r4_evaluacion3 = $mysqli->query($insert_r4_evaluacion3);
    $id_r4_evaluacion3=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion3,$id_r4_evaluacion3)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//*/
    
    //Evaluacion 4
    $insert_evaluacion4 = "INSERT INTO pregunta_evaluacion(descripcion)values('$evaluacion4')";
    $exito_evaluacion4 = $mysqli->query($insert_evaluacion4);
    $id_evaluacion4=$mysqli->insert_id;
    if($simagen_evaluacion4 == 'true'){
        $path = "img/evaluaciones/".$id_evaluacion4.".".extension_imagen($nombre_imagen_evaluacion4);
        $query_img_evaluacion4 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_evaluacion4 = $mysqli->query($query_img_evaluacion4);
        $id_imagen_ev4=$mysqli->insert_id;
        $query_rel_evaluacion = "INSERT INTO rel_imagen_evaluacion(id_imagen,id_evaluacion )values($id_imagen_ev4,$id_evaluacion4)";
        $exito_rel_img_evaluacion4 = $mysqli->query($query_rel_evaluacion);
        if($exito_rel_img_evaluacion4){
            copy($imagen_evaluacion4,"../".$path);
        }
    }
    $insert_rel_curso_evaluacion = "INSERT INTO rel_curso_evaluacion(id_curso,id_evaluacion)values($id_curso,$id_evaluacion4)";
    //echo $insert_curso;
    $exito_rel_curso_evaluacion = $mysqli->query($insert_rel_curso_evaluacion);
    
    //respuestas de la evaluacion 4
    //respuesta 1
    $insert_r1_evaluacion4 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r1_evaluacion4','correcta')";
    $exito_rel_insert_r1_evaluacion4 = $mysqli->query($insert_r1_evaluacion4);
    $id_r1_evaluacion4=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion4,$id_r1_evaluacion4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 2
    $insert_r2_evaluacion4 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r2_evaluacion4','incorrecta')";
    $exito_rel_insert_r2_evaluacion4 = $mysqli->query($insert_r2_evaluacion4);
    $id_r2_evaluacion4=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion4,$id_r2_evaluacion4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r3_evaluacion4 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r3_evaluacion4','incorrecta')";
    $exito_rel_insert_r3_evaluacion4 = $mysqli->query($insert_r3_evaluacion4);
    $id_r3_evaluacion4=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion4,$id_r3_evaluacion4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r4_evaluacion4 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r4_evaluacion4','incorrecta')";
    $exito_rel_insert_r4_evaluacion4 = $mysqli->query($insert_r4_evaluacion4);
    $id_r4_evaluacion4=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion4,$id_r4_evaluacion4)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//*/
    
    //Evaluacion 5
    $insert_evaluacion5 = "INSERT INTO pregunta_evaluacion(descripcion)values('$evaluacion5')";
    $exito_evaluacion5 = $mysqli->query($insert_evaluacion5);
    $id_evaluacion5=$mysqli->insert_id;
    if($simagen_evaluacion5 == 'true'){
        $path = "img/evaluaciones/".$id_evaluacion5.".".extension_imagen($nombre_imagen_evaluacion5);
        $query_img_evaluacion5 = "INSERT INTO imagen(ruta)values('$path')";
        $exito_img_evaluacion5 = $mysqli->query($query_img_evaluacion5);
        $id_imagen_ev5=$mysqli->insert_id;
        $query_rel_evaluacion = "INSERT INTO rel_imagen_evaluacion(id_imagen,id_evaluacion )values($id_imagen_ev5,$id_evaluacion5)";
        $exito_rel_img_evaluacion5 = $mysqli->query($query_rel_evaluacion);
        if($exito_rel_img_evaluacion5){
            copy($imagen_evaluacion5,"../".$path);
        }
    }
    $insert_rel_curso_evaluacion = "INSERT INTO rel_curso_evaluacion(id_curso,id_evaluacion)values($id_curso,$id_evaluacion5)";
    //echo $insert_curso;
    $exito_rel_curso_evaluacion = $mysqli->query($insert_rel_curso_evaluacion);
    
    //respuestas de la evaluacion 5
    //respuesta 1
    $insert_r1_evaluacion5 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r1_evaluacion5','correcta')";
    $exito_rel_insert_r1_evaluacion5 = $mysqli->query($insert_r1_evaluacion5);
    $id_r1_evaluacion5=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion5,$id_r1_evaluacion5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 2
    $insert_r2_evaluacion5 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r2_evaluacion5','incorrecta')";
    $exito_rel_insert_r2_evaluacion5 = $mysqli->query($insert_r2_evaluacion5);
    $id_r2_evaluacion5=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion5,$id_r2_evaluacion5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 3
    $insert_r3_evaluacion5 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r3_evaluacion5','incorrecta')";
    $exito_rel_insert_r3_evaluacion5 = $mysqli->query($insert_r3_evaluacion5);
    $id_r3_evaluacion5=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion5,$id_r3_evaluacion5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//

    //respuesta 4
    $insert_r4_evaluacion5 = "INSERT INTO respuesta_evaluacion(texto_respuesta,estatus)values('$r4_evaluacion5','incorrecta')";
    $exito_rel_insert_r4_evaluacion5 = $mysqli->query($insert_r4_evaluacion5);
    $id_r4_evaluacion5=$mysqli->insert_id;

    //relacion entre esta respuesta y el ejercicio
    $insert_rel_evaluacion_respuestas = "INSERT INTO rel_evaluacion_respuestas(id_pregunta_evaluacion,id_respuesta_evaluacion)values($id_evaluacion5,$id_r4_evaluacion5)";
    //echo $insert_curso;
    $exito_rel_ejercicio_respuesta = $mysqli->query($insert_rel_evaluacion_respuestas);//*/

    $fl = false;
    $data = array(
        "exito" => $fl,
        //"data" => $_REQUEST
        "insert_curso" => $insert_curso
        );
      echo json_encode($data);//*/
?>