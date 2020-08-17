<?php

echo "Result of Fibonnaci series of numbers starting from 1 with PHP";
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";


$num = 12;
function numbers($num){

    if ($num == 0){
        return 0;
    }elseif($num == 1){
        return 1;
    }else{
        $next = numbers($num-1) + numbers($num-2);
        return $next;
    }

}

echo " --> ";
for ($i=1; $i<=$num; $i++){

   echo numbers($i);
   echo " ";
}

?>