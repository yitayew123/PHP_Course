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
// echo slocal() ."\n";
// echo slocal();
// variable concatination
$fname = "yitayew";
$lname = " solomon";

// echo "your name is:\n".$fname." ". $lname;

// variable of variables
$var1 = "My_Name";
$$var1 = "yitayew";
// echo $My_Name;

print "hello world1 \n";
$success = print "hello world2 \n";
echo $success;
echo "well come"
?>


