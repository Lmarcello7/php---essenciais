<?php

$email = "lucas.marcello@gmail.com";

if(preg_match('/^([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z]{2,5})$/', $email) === 1){ //recebe a regex e depois a string, se der certo retorna 1 se não retorna 0
    echo "Valido";
} else {
    echo "Não Valido";
}

echo "<br>";
echo "<br>";
echo "<br>";

$emails = ['lucas_marcello@gmail.com', 'makita   @g2¬¬£¢£¬.com', 'marcello887@gmail.com', '   '];

$valido = preg_grep('/^([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z]{2,5})$/', $emails); //valida um array de emails

var_dump($valido);

$nomes = "Lucas 29/04 Jason 20/02 Synyster 01/03";