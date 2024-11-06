<?php

$a= 7;
$x =10;
$y = 9;
$z = 7;

$resultado = match ($a) {
     $x=>"valor igua a x" ,
     $y=> "valor igual a y",
     $z=> "valor igual a z",
     default => "No coincide con ninguna variable"
};
echo $resultado;

$edad = 18;
$res2 = match(true){
$edad >= 60 => "tercera edad",
$edad >= 30 => "adulto",
$edad >= 18 => "adulto joven",
default => "eres niño"
};

echo $res2;