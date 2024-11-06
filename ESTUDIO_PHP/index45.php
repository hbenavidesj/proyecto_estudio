<?php



if(isset($_POST['numero'])&& $_POST['numero']!=""){
 $numero =$_POST['numero'];

 for($b=1;$b<=12; $b++){
    echo $numero." x ".$b. " = ". $numero*$b."<br>";
 
 }
}else{

   echo "no definida";
}