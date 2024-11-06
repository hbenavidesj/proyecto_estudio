<?php

$cadena = "Hola mundo";

#para convertir en minusculas
echo  strtolower($cadena);
echo "<br>";
#para convertir en mayusculas
echo  strtoupper($cadena);
echo "<br>";
#para convertir frase con primera mayuscula
echo  ucfirst($cadena);
echo "<br>";
#para convertir cada palabra con mayuscula
echo  ucwords($cadena);

echo "<br>";
#para contar caracterse
echo  strlen($cadena);

echo "<br>";
#para contar palabras
echo  str_word_count($cadena);