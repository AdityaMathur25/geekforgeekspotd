<?php 
$a = $_POST['numberr'];//enter the days
$y = 0 ;
$z = 0;
$p = 0;

//echo "Should be 5: " . ++$a ;
for ($i=0; $i < $a ; $i++) { 
    ++$z;
    ++$y;
    ++$p;
    if ($y==8) {
        $z=$z+8;
        $y=0;
    }

     

    
}
echo "days : " . $p  .  "<br>";
     echo "Points : " . $z  . "<br>";
?>