<?php
#setcookie("Nombre",valor,expiracion,dir, domini,secure,httponly);
setcookie("Idioma","es",time()+60*60*24*30,"/","localhost",false, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <h1>
    <?php
    echo $_COOKIE['Idioma'];
    ?>

    </h1>
</body>
</html>