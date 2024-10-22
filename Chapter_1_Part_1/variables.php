<?php
$name = "yitayew";
$number = 25;
$is_real = true;
$float_num = 3.14;
$fruits = array("Apple","banana","mango","orange");
// echo $fruits[3];

function local()
{
    $local_var = "I'm local";
    echo $local_var; 
}
// local();
// echo $number;
function slocal(){
    static $st_var = 0;
    $st_var ++;
    echo $st_var;
}
echo slocal() ."\n";
echo slocal();
?>


