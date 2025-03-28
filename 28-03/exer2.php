<?php
    
    ##Faça uma condição, se o aluno foi aprovado ou reprovado
    ##Se a nota for > 6 ele foi aprovado
    $nota = 5;

    if ($nota < 6) {
        echo  "você esta reprovado, Melhore";
    } else if ($nota >= 6) {
        echo "você esta aprovado, Parabéns";
    }