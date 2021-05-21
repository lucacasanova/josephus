<?php
function josephus($n, $k)
{
    if ($n === 1) {
        return 1;
    } else {
        //função recursiva para eliminar 1 soldado por vez
        return (josephus($n - 1, $k) + $k - 1) % $n + 1;
    }
}

//Declaração dos naturais
$n = 2021;
$k = 2;

/*
$k = 1; soldado se mata
$k = 2; soldado mata quem está ao lado
$k = 3; soldado mata segunda pessoa que está ao lado
*/

echo "O soldado " . josephus($n, $k) . " ficou vivo.";
