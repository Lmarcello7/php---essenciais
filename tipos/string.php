<?php

// $str = "TreinaWeb Cursos";

// var_dump($str[10]);

// $str[10] = 'T';

// var_dump($str);

// echo "<h1 style=\"color: red;\">Olá Mundo</h1>";

// echo "Eu tenho R$mil reais";

$escola = "TreinaWeb";

//HEREDOC
$conteudo
 = <<<HTML
    <h1 style="color: red;">Olá $escola</h1>
    <p>Welcome to the mato</p>
HTML;
echo $conteudo;


//NOWDOC
$conteudo = <<<'HTML'
    <h1 style="color: red;">Olá $escola</h1>
    <p>Welcome to the mato</p>
HTML;

echo $conteudo;