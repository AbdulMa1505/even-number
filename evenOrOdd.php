<?php
function EvenOrOdd($number){
    if($number%2==0){
        echo "this is an even number";
    }
    else{
        echo "this is an odd number";
    }
}
$check=EvenOrOdd(2);
echo $check;
?>