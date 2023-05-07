<?php

echo "TreinaWeb ", "cursos";
echo "<br>";

$curso = "PHP - Recursos";
$versao = 7.4;

$resultado = sprintf('Curso de %s versao: %0.1f', $curso, $versao);
echo $resultado;
echo "<br>";
printf('Curso de %s versao: %0.1f', $curso, $versao);
echo "<br>";
//--ARRAYS

$entrada = ['PHP', 7.4];
$resultado = vsprintf('Curso de %s versao: %0.1f', $entrada);
echo $resultado;

echo "<br>";
vprintf('Curso de %s versao: %0.1f', $entrada);