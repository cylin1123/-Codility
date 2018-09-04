<?php

$X = 10;
$Y = 85;
$D = 30;


$distance = $Y - $X ;
    
if($distance ==0)
    return 0;

if($distance <= $D)
    return 1;

$jumps =  intval($distance  / $D);

if( $distance  % $D > 0){
    
    $jumps = $jumps+1;
}

return $jumps;
?>