<?php

// $fruits = array("mango", "apple", "banana", "pineapple");

// echo $fruits[1];
// $total = count($fruits);

// for ($i = 0; $i<$total; $i++){
//     echo $fruits[$i]. "<br/>";
// }
// echo "the total fruits is:". $total;

// $fruits = array("mangga" => "mango","mansanas" => "apple", "saging" => "banana","pinya" => "pineapple");

// // print_r($fruits);
// echo $fruits["pinya"];

// SORTING OF ARRAY
// $numbers = array(1,3,2,4,5,6,10,8,9,7);

// SORT IN ASCENDING ORDER
// print_r($numbers);
// echo "<br/>";
// sort($numbers);
// print_r($numbers);


// SORT IN DESCENDING ORDER
// echo "<br/>";
// rsort($numbers);
// print_r($numbers);

// SEARCH IN ARRAY
$fruits = array("mango", "apple", "banana", "pineapple");

if (in_array("mango", $fruits)){
    echo "has mango";
}else{
    echo "no mango";
}

?>