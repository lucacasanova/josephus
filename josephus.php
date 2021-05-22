<?php

// Como base https://youtu.be/85dS11fQKX0?t=296

function MariorPorenciaDe2($n)
{
    //variavel auxiliar
    $aux = 0;

    //utilizando for para adicionar +1 a $i 
    for ($i = 1;; $i++) {

        //variavel auxiliar recebe a resposta da potencida de 2 ^ $i
        $aux = pow(2, $i);

        //se identificar que a resposta da portancia de 2 é maior que o valor de N
        if ($aux > $n)

            //retorna o FOR anterior = 2 ^ ($i - 1)
            return pow(2, $i - 1);
    }
}

function resolucao($n)
{
    //Notando que a melhor forma de resolver o problema é tirar a maior potendia de 2 de dentro do N
    $mortes_necessarias = $n - MariorPorenciaDe2($n);
    //assim conseguimos saber que a posição segura é (quantidade de mortes necessárias * 2) + 1
    //utilizamos o * 2, pois sabemos que na primeira partida todos os números pares morrem
    $posicao_segura = ($mortes_necessarias * 2) + 1;
    return $posicao_segura;
}

echo "O soldado " . resolucao(6) . " ficou vivo.";
