<?php

    $A =[2];
    
    echo solution($A); 

    function solution($A) {
        // write your code in PHP7.0
    
        
                
        if(count($A)==2){
            if($A[1]-$A[0]!=1){
                return 0;
            }
        }
        
        if(count($A)==1 && $A[0]==1){         
                return 1;            
        }

        
        
        $maxNum = max($A);
        $minNum = min($A);

        if($maxNum > 1000000000){
            return 0; 
        }

        if($minNum < 1){
            return 0; 
        }

    
        #echo "maxnum : ".$maxNum."\n";
        
        $sum =0 ;
        for($i=1;$i<=$maxNum;$i++){
            $sum = $sum +$i;
        }
    
        #echo $sum."\n";
        
        foreach($A as $key){
            $sum = $sum -$key;
        }
    
        #echo $sum;
        
         if($sum > 0 ||$sum <0){
             return 0;
         }else{
             return 1;
         }
    }

?>