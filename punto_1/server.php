<?php
include "index.html";

$n1 = $n2 = $tipo= $result = 0;

if (isset($_POST['operar'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $tipo = $_POST['tipo'];

    switch ($tipo) {
        case '1':
            $result = $n1 + $n2;
            break;
        case '2':
            $result = $n1 - $n2;
            break;
        case '3':
            $result = $n1 * $n2;
            break;
        case "4":
            $result = $n1 / $n2;
            break;
    }
    echo "<h4>el resultado de la operacion es: $result.</h4>";
}

?>