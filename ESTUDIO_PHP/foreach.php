<?php

/**
 * para recorrer solo valor
 * 
 * foreach($array as $valor){
 * $valor tendra en cada iteracion 
 * un valor del array
 * 
 * }
 * 
 * 
 * para recorrer clave y valor
 * 
 * foreach($array as $clave => $valor ){
 * $clave tendra en cada iteracion una clave del array
 * 
 * $valor tendra en cada iteracion un valor del array
 * 
 * }
 * 
 */

 #array con solo valor


 $marcaPc =["acer","dell", "asus","apple","huawei", "hp","lenovo"];

  #array con clave

  $frutas=[
"fresa" => 100,
"mango" => 300,
"pera" => 350,
"manzana" => 360,
"uva" => 700,
"banano" => 20,
  ];
 

  foreach($marcaPc as $valor){

    echo $valor."<br>";

  }



  foreach($frutas as $clave => $valor){

    echo "hay ".$valor." ". $clave. " en el inventario"."<br>";
  }


  // recorrey array multidimencional

  $productos = [
["codigo"=>"a1", "descripcion"=>"mouse"],
["codigo"=>"a2", "descripcion"=>"teclado"],
["codigo"=>"a3", "descripcion"=>"camara"],
["codigo"=>"a4", "descripcion"=>"parlantes"]
  ];

  foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";

  }