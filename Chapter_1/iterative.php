<?php
// // while loop example
// echo "While Loop:\n";
// $i = 1;
// while ($i <= 5) {
//     echo "Number: $i\n";
//     $i++;
// }

// echo "\n";

// // do-while loop example
// echo "Do-While Loop:\n";
// $j = 1;
// do {
//     echo "Number: $j\n";
//     $j++;
// } while ($j <= 5);

// echo "\n";

// // for loop example
// echo "For Loop:\n";
// for ($k = 1; $k <= 5; $k++) {
//     echo "Number: $k\n";
// }

// echo "\n";

// // foreach loop example
// echo "Foreach Loop:\n";
// $array = ["Apple", "Banana", "Cherry", "Date"];
// foreach ($array as $fruit) {
//     echo "Fruit: $fruit\n";
// }

for($i=1;$i<=10; $i++){
    if($i==5){
        continue;
    }
    echo "The number is:".$i."\n";
}

?>