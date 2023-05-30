<?php

date_default_timezone_set('America/Sao_Paulo');

$agora = new dateTime;

echo "<pre>";
print_r($agora);
echo "</pre>";

$outraData = new DateTime('2020-08-22');
$ontem = new DateTime('yesterday');

echo "<pre>";
print_r($ontem);
echo "</pre>";

echo "<pre>";
print_r($outraData);
echo "</pre>";
