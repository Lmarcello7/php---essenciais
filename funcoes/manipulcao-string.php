<?php

$str = 'Minha string';
$posicao = strpos($str, 'a');

if ($posicao !== false) {
    echo "A string 'a' foi encontrada na posição $posicao.";
} else {
    echo "A string 'a' não foi encontrada na string.";
}

//str_replace com mais de um parametro
$str = 'TreinaWeb Cursos';
$strModificada = str_replace(['r', 'w'], '*', $str);

var_dump($strModificada);

echo "<br>";

$str = 'TreinaWeb Cursos';
$strModificada = str_replace(['r', 'W'], ['*' , '#'], $str);

var_dump($strModificada);