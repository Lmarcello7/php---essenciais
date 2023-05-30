<?php

$nomes = "Lucas 29/04 Jason 20/02 Synyster 01/03";
$padrao = '/\d{2}\/\d{2}/'; // Padrão para identificar as datas no formato DD/MM

$nomes_sem_datas = preg_replace($padrao, '', $nomes);

echo $nomes_sem_datas;
