<?php
    $idade = 19;
    $nome = "Seya";

    //aqui pode usar || ou tambem pode usar or em php
    if ($idade === 18 or $idade > 18) {
        echo "$nome, você tem $idade anos. Pode entrar na festa";
    }

    echo "<br><br>";
    

    //aqui pode usar && ou tambem pode usar and em PHP
    if ($idade === 18 and $nome === "Seya") {
        echo "Você tem $idade anos. Pode entrar";
    } else {
        echo "Não deu certo";    
    }

?>