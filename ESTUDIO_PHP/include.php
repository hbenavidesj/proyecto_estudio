<?php

/**
 * 
 * ejecuta un archivo que tengamos guardado
 * include envia error y continua ejecucion
 * require envia un  fatal error y archivo no se sigue ejecutando
 * 
 * require_once e include_once hace que un archivo solo se ejecute una vez
 * 
 */
include "switch.php";
echo "<br>";
require "switch.php";
echo "<br>";
require_once "switch.php";
echo "<br>";
include_once "switch.php";