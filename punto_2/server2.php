<?php
include "index2.html";
$edad = 0;



if (isset($_POST['resultado'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        echo "<h2>Es mayor de edad</h2>";
    }
    else if (18 > $edad && 0 < $edad) {
        echo "<h2>Es menor de edad</h2>";
    }else{
        echo "<h2>No valido</h2>";
    }

}

?>