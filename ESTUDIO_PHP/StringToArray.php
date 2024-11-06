<?php

$f1 ="2024/10/25";
$f2="2024-10-25";
$n ="uno dos tres cuatro cinco seis siete";

#explode(delimitador,string, limitador)

$array_fecha = explode("-",$f2);


echo $array_fecha[0]."<br>";
echo $array_fecha[1]."<br>";
echo $array_fecha[2]."<br>";

# si colocamos un tercer argumento x, esto indica en cuantas partes se va a dividir
# $array_fecha = explode("-",$f2, x);
# si reemplazo x por -1 dejara de mostrar el ultimo item

$array_fecha = explode(" ",$n);

foreach($array_fecha as $valor){
    echo $valor."<br>";

}