<?php

date_default_timezone_set('America/Sao_Paulo'); //PEGA FUSO-HORAIO CORRETAMENTE

var_dump(date('H:i'));
echo "<br>";
var_dump(date('e'), date('p')); // MOSTRA LOCAL E FUSO-HORARIO

//-----------------------------------------------------------//
//função time conta os segundos da data de 1 de janeiro de 1970 até hoje

echo "<br>";
var_dump(time());

echo "<br>";
echo "<br>";
echo "<br>";

$amanha = strtotime('+1 day');

$data = date('d/m/Y', $amanha);

var_dump($data);

echo "<br>";
echo "<br>";
echo "<br>";

var_dump(converteData('20230503'));

function converteData($data){
    $timeStamp = strtotime($data);

    return date('d/m/Y', $timeStamp);
}