<?php
    $pessoas  = ["Carlos", "Juliana", "Fernando", "Lucas"];

    for ($i = 0; $i < count(value: $pessoas); $i++) {
        if ($pessoas[$i] == "Juliana" ) {
         echo " $pessoas[$i] - é a tecnica do time de futebol!" . "<br>";
     } else {
            echo " $pessoas[$i] <br>";
        }
    }
?>