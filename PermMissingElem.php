<?php

$A =[2,3,1,5];

echo solution($A);

function solution($A) {
    // write your code in PHP7.0
    
    $N = count($A);
    
    $Sum = ($N+1)*($N+2)/2;
    
    for($i=0 ; $i < $N; $i++){
        
        $Sum = $Sum - $A[$i];
        
    }
    return $Sum;    
}

?>