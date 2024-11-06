<?php

/** asignacion por referencia
 * dos variables o mas terminar apuntando al mismo dato
 */

 $texto = "El salvador";

 $v1 = $texto;
 $v2 = &$texto;

 $texto = "Hola mundo";

 //$v1 va a mostrar siempre lo ultimo que tenga la variable $texto
 echo $v1;