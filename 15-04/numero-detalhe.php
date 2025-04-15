<?php
    $txtNumero = $_POST['txtNumero'];
    $gera = rand(1,10);

    echo "numero gerado é: $gera";
    echo"<br>";

    //condição
    //se o gera == txtNumero 

    if ($gera == $txtNumero) {
        echo "Congratulation $txtNumero";
    } else {
        echo "infelizmente não foi dessa vez";
    }
?>
