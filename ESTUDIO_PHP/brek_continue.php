<?php
# break detiene la ejecucion


$b=1;
 $num = 7;

 while($b<=12){
    echo $num." x ".$b. " = ". $num*$b."<br>";
    $b++;
    if ($b==10){
        break;
    }
 }


 #continue salta una iteracion

 while($b<=12){
   
    $b++;
    if ($b==10){
        continue;
    }

    echo $num." x ".$b. " = ". $num*$b."<br>";
    
 }