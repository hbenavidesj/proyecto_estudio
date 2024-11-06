<?php

/**
 * do{
 * codigo a ejecutar
 * }while (condicion);
 * 
 */

 //tabla de multiplicar de un numero

 $b=1;
 $num = 7;

 do{
    echo $num." x ".$b. " = ". $num*$b."<br>";
    $b++;
 }while ($b<=12);