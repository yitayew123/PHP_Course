<?php

// function wellcome($name,$age){
//     $str="well come to php function";
//     echo "well come to php function "."\n";
//     echo "length of the str is:".strlen($str)."\n";
//     echo "your Name is:".$name ." and "."your age is: ".$age;


// }

// wellcome("yitayew",32);

// function add($a,$b){
//     return $a + $b;
// }
// $result = add(12,34);
// echo "The result is: $result\n";
function areacircle($radius){
    if($radius<=0){
        echo "Invalid Number.";
    }
    return M_PI * pow($radius,2);
}

echo "the area of the circle is:".areacircle(2)."\n";
echo "the area of the circle is:".areacircle(-2);

?>




