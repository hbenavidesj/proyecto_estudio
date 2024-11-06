<?php

//ecuacion <operator> ? <true value> : <false value>
// se considera como una instruccion if de una linea 
//se compone de un operador y tres resultados

 (14699662 === "14699662") ? $res ="ok" : $res="no";

 echo $res;

//otra alternativa:

$res2 = (14699662 == "14699662") ? "ok" :"no";
echo $res2;
