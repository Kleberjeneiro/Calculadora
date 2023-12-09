<?php

    // Recebe os número digitados
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Recebe o operador escolhido
    $operador = $_POST['operador'];

    //
    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            echo "<strong> Resultado: $resultado</strong>";
            break;
        case '-':
            $resultado = $num1 - $num2;
            echo "<strong> Resultado: $resultado</strong>";
            break;
        case '*':
            $resultado = $num1 * $num2;
            echo "<strong> Resultado: $resultado</strong>";
            break;
        case '/':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "<strong> Resultado: $resultado</strong>";
            } else {
                echo "<strong>Não é possível dividir por zero</strong>";
            }
            break;      
        default:
            echo "<strong>Operador Inválido</strong>";
            break;

      
    }

?>    