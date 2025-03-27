<?php
    // Tipos primitivos

    // Inteiro (integer)
    $idade = 37;
    echo "Idade: $idade Anos, Tipo: " .getType(value: $idade) . "<hr>";

    // Ponto flutuante (Float)
    $preco = 19.99;
    echo "Preco: " .$preco . " " ."Tipo: " .getType(value: $preco) . "<hr>";

    // String (texto quando tem aspas)
    $nome = "Roberson";
    echo "Nome: ".$nome ." " . "Tipo: " .getType(value: $nome) . "<hr>";

    // Boolean (Boolean) (para identificar alguma coisa)
    $temCarro = true;
    echo "Tem carro? ".$temCarro ."Tipo: " .getType(value: $temCarro) . "<hr>";

    // Array (varias variaveis)
    $cores =["vermelho", "azul", "verde"];
    echo "Cores: ";
    print_r(value: $cores);
    echo "<br>";
    echo "Tipo: " .getType(value: $cores);
    echo "<hr>";

    // Null
    $vazio = null;
    echo "Vazio: ". $vazio ."tipo: " .getType(value: $vazio) . "<hr>";



?>
