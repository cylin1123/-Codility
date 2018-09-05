<?php

$A = [3,1,2,4,3];

echo solution($A);

function solution($A) {
    // write your code in PHP7.0
    
    
    $N = count($A);
    $temp=[];

    $sum = 0;
    foreach ($A as $key) {
        $sum = $sum +$key;
    }

    if($N==2){
        return abs($A[1]-$A[0]);
    }

    $count =0;
    for ($i=0; $i <$N-1 ; $i++) { 
        $count = $count+$A[$i];
        $sum = $sum-$A[$i];
        $dif =abs($sum -$count);
        #echo "A[".$i."] = ".$A[$i]."  count : ".$count." sum :".$sum." dif : ".$dif."\n";
        array_push($temp,$dif);    
    }

return min($temp);

}
?>