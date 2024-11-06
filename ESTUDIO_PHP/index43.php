<?php

$materias = $_POST['asignatura'];
$frutas = $_POST['frutas'];

foreach($materias as $asignatura){
echo $asignatura."<br>";
}

foreach($frutas as $fruta){
    echo $fruta."<br>";
    }

