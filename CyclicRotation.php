<?php

$A = [3, 8, 9, 7, 6];
$K = 3;

echo print_r(solution($A, $K)) ;
function solution($A, $K) {
    // write your code in PHP7.0

    $arrayLen = count($A);
    
    for ($i = 0 ;$i < $K ; $i++ ){
        $temp = array();
        
        for ($j = 0; $j <$arrayLen; $j++){
            
            if($j ==$arrayLen -1){
                $pos = ($j+1) % $arrayLen;
            }else{
                $pos = $j % $arrayLen + 1;
            }
            
            $temp[$pos] = $A[$j];
            
        }
        $A = $temp;
    }
    return $A;
}


?>
