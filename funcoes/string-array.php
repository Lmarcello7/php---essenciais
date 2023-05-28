<?php

$cursos = explode(',', "PHP, C#, JAVA, Flutter"); // TRANSFORMA UMA STRING EM ARRAY

var_dump($cursos);
//[0] PHP
//[1] C#
//[2] JAVA
//[3] Flutter

$cursosString = implode(' - ', $cursos); //TRANFORMA UM ARRAY EM STRING

var_dump($cursosString);

//PHP - C# - JAVA - FLUTTER
