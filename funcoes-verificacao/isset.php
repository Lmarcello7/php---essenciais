<?php

//Essa função serve para verificar se uma variável existe, verifica se ela foi inicializada e se inicializada, não foi inicializada com valor nulo.


var_dump(isset($valor)); //nesse caso, retona false pois essa var não existe

$valor = 10;

var_dump(isset($valor)); //nesse caso, retona true pois a var existe

$arrCursos = [
    'php' => 8.2,
    'flutter' => 3.0
];

if(isset($arrCursos['c#'])){
    echo $arrCursos['c#'];
} else {
    echo "Curso não encontrado";   
}