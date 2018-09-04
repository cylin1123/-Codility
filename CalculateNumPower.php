# 計算11的N次方有幾個1
<?php

$num = 121;
$n = 110;
$StrNum = bcpow($num,$n);

echo $StrNum."\n";

$arr1 = str_split($StrNum);

$arraylen = count($arr1);

$count = 0;
for($i = 0; $i<$arraylen;$i++)
{
    if($arr1[$i]=="1")
    {
        $count++;
    }	
}

echo $count;

?>
