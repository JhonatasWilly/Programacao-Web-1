<?php

    //ISSET -> Verifica a existencia da variavel.
    // FOREACH -> Estrutura de repetição que percorre todo o array.
    // AS -> Atribui o elemento da posição atual do array a variavel esporte.

    if (isset($_POST["esporte"])){

        echo "Os esportes escolhidos foram: <BR>";
        foreach($_POST["esporte"] as $esporte){
            echo $esporte . "<BR>";
        }

    } else {
        echo "Nenhum esporte foi escolhido.";
    }
?>