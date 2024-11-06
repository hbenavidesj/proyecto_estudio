<?php

$numero=7; 


# is_null es true si es nula o no tiene ningun valor
# unset para eliminar una variable

unset ($numero);


if (is_null($numero)){
    echo "es nula <br>";
}else{
    echo "No es nula <br>";
}


#empty es true si tien un valor vacio o 0, 0.0 "0"
if (empty($numero)){
    echo "esta vacia <br>";
}else{
    echo "No esta vacia <br>";
}

#isset determins si una variable esta definida y no es null

if (isset($numero)){
    echo "esta definida <br>";
}else{
    echo "No esta definida <br>";
}
