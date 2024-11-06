<?php

#php.net/manual/es/function.date.php

date_default_timezone_set("America/Bogota");

echo date("Y-m-d");
echo "<br>";
echo $hora12 = date("h:i a");
echo "<br>";
echo $hora24 = date("H:i a");
echo "<br>";
echo $hora24 = date("Y-m-d H:i A");

