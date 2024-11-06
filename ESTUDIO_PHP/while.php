<?php

/**
 * while (condicion){
 * }
 * 
 * tambien se puede escribir de la siguiente forma
 * 
 * while (condicion):
 * 
 * endwhile;
 */

 //imprimir numeros del 1 al 20

 $c =1;
 while($c<=20){
    echo $c."<br>";
    $c++;
 }

 //imprimir un programa que imprima una tabla de multiplicar del 1 al 12

 $b=1;
 $num = 7;

 while($b<=12){
    echo $num." x ".$b. " = ". $num*$b."<br>";
    $b++;
 }