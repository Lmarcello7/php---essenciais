<?php

$arrCursos = [
    'php' => 8.2,
    'flutter' => 3.0,
    //'c#' => 6.2
];

// if(isset($arrCursos['c#'])){
//     echo $arrCursos['c#'];
// } else {
//     echo "Curso não encontrado";   
// }

//$cSharp = isset($arrCursos['c#']) ? $arrCursos['c#'] : "Curso não encontrado";

//COM NULL COALESCING
$cSharp = $arrCursos['c#'] ?? "Curso não encontrado";
var_dump($cSharp);