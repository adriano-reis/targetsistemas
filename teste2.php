<?php

/*
 2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;

 */

function fibonacci($num, $limite)
{

    $fib = [0, 1];

    for ($i = 1; $i < $limite; $i++) {

        $fib[] = $fib[$i] + $fib[$i - 1];
    }

    if (in_array($num, $fib)) {

        echo "O número " . $num . " pertece à sequência de Fibonacci";
    } else {

        echo "O número " . $num . " não pertece à sequência de Fibonacci";
    }
}

//O primeiro argumento é o número a ser pesquisado na sequência de Fibonacci
//O segundo argumento é o limite da sequência de Fibonnaci

fibonacci(4, 10);
