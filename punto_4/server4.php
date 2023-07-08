<?php
include "index4.html";
define("constante_18",18);
if (isset($_POST['resultado'])) {
    $fecha = new DateTime($_POST['fecha']);
   
    $date2 = new DateTime(date("y-m-d"));

    $diferencia = $fecha->diff($date2);

    $edad_actual = $diferencia->y;
    $edad_meses = $diferencia->m;
    $edad_dias = $diferencia->d;

    if($edad_actual >= constante_18){
        echo"<h4> es mayor de edad,<br> ya que tiene $edad_actual años</br> </h4>";
    }
    else{
        echo"<h4>es menor de edad</h4>";
    }
    echo"<h4><br>años: $edad_actual<br>meses: $edad_meses<br> dias: $edad_dias</h4>";

        
    
}

?>