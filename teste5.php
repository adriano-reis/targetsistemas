<?php

/*

5) Escreva um programa que inverta os caracteres de um string.

IMPORTANTE:
a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
b) Evite usar funções prontas, como, por exemplo, reverse;

*/

$string = 'desenvolvedor';

$array = str_split($string);

for ($i = count($array) - 1; $i <= count($array) - 1; $i--) {

    while ($i >= 0) {
        echo $array[$i];

        $i--;
    }
    exit;
}
