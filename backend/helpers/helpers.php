<?php 

/* Recortar texto, texto de introducción */
function textoCorto($texto, $maximochart = 10){

    $limpiarTexto = strip_tags($texto);
    //substr — Devuelve parte de una cadena
    $texto = mb_substr($limpiarTexto,0, $maximochart,'UTF-8')."...";

  return $texto;
}

