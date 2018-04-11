<?php
    function extension_imagen($nombre_imagen){
        $extension_imagen=explode('.',$nombre_imagen);//division entre nombre y extension
        $extension=$extension_imagen[(sizeof($extension_imagen)-1)];
        return $extension;
    }

?>