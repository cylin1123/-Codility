<?php

$A = [9,3,9,3,9,7,9];

#print_r(array_count_values($A));

$count =   array_count_values($A);

foreach($count as $item =>$value){

    if($value %2 ==1){
        return $item;
    }
}

?>