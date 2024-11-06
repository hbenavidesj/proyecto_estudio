<?php

/** escalares. sin indice definido */

$estudiantes = array("harold", "pedro", "juan", "vanesa");
$pares =[2,4,6];
// para modificarlo

 $estudiantes[3]="claudia";

//para accederlo
echo $estudiantes[3];

/** arrays asociativos */

$tutor =["nombre"=>"harold", "apellido"=>"benavides", "edad"=>"41"];
$tutor["apellido"]="cuaran";
echo $tutor["apellido"];

/** arrays de multiples dimensiones */
$tutor_2 =["nombre"=>"vanesa", 
"apellido"=>"benavides", 
"edad"=>"32",
"cursos"=>["php", "python","css" ]
];

//para acceder
echo $tutor_2["cursos"][1];

//contar elementos de un arrary
echo count ($estudiantes);

//para contar elementos de arrays multidimensionales

echo count ($tutor_2);