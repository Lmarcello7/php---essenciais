<?php

//COMPARAÇÃO DE STRINGS BINARIAS

var_dump(strcmp('Aa', 'aa')); //semelhante ao spaceShip, se são iguais, retorna zero

if(strcmp('Aa', 'aa') === 0){
    echo "As string são iguais";
} 


var_dump(strcmp('Aa', 'aa')); //semelhante ao spaceShip, se são iguais, retorna zero

if(strcasecmp('Aa', 'aa') === 0){ //verifica independente se são minusculas ou maisculas
    echo "As string são iguais";
} 