<?php

//VERIFICANDO SE É INT

var_dump(is_int(123)); //true
var_dump(is_int('123')); //false

//VERIFICANDO SE É FLOAT

var_dump(is_float(1.23)); //true
var_dump(is_float('1.23')); //false

//VERIFICANDO SE É NUMÉRICO 

var_dump(is_numeric(123)); //true
var_dump(is_numeric('123')); //true
var_dump(is_numeric(1.23)); //true
var_dump(is_numeric('1.23')); //true

//VERIFICA SE É STRING
 
var_dump(is_string('sim é uma string')); //true

//VERIFICA SE É BOOL
var_dump(is_bool(true)); //true

var_dump(gettype(123));