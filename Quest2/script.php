<?php
    if (isset($_POST["faixa-etaria"])){
        if($_POST["faixa-etaria"] == "menor18"){
            echo"A faixa etária escolhida foi abaixo ou igual a 18 anos.";
        } 
        
        elseif($_POST["faixa-etaria"] == "maior18"){
            echo"A faixa etária escolhida foi acima de 18 anos.";
        } 
        
        elseif($_POST["faixa-etaria"] == "menor60"){
            echo"A faixa etária escolhida foi abaixo ou igual a 60 anos.";
        } 
        
        else{
            echo"A faixa etária escolhida foi acima de 60 anos.";
        }
    } 
    
    else {
        echo "Nenhuma faixa etária escolhido.";
    }
?>