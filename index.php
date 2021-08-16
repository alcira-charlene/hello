<?php


// echo "hello world </br>";
// Has return value of 1
// print "goodbye!";

// Variables
// $var1 = "Hello World";
// $var_num = 19;
// echo $var1;
// echo "<br/>";
// echo $var_num;


// PHP Data Types
// $text = "Hello";
// $number = 19;
// $float = 92.3;
// $boolean = false;
// $array = array("Hello",19, false, 93.5);

// var_dump($text);
// var_dump($number);
// var_dump($float);
// var_dump($boolean);
// var_dump($array);

// STRINGS
// $text = "Hello world";
// $number = 19;
// $float = 92.3;
// $boolean = true;
// $array = array($text, $number, $float, $boolean);


// echo $text." " .$number.$float.$boolean.$number;
// echo "<br/>";
// echo strlen($text);

// $new = str_replace(" ","",$text);
// echo "<br/>";
// echo $new;
// echo "<br/>";
// echo strlen($new);

// echo strpos($text,"world");

// CONSTANT

// define("Master","PinoyFreeCoder");
// echo Master;


// OPERATORS
// $number1 = 19;
// $number2 = 32;

// echo $number1 % $number2;

// IF STATEMENTS
// $number1 = 19;
// $number2 = 32;

// if ($number1 < $number2){
//     echo "True";

// }else{
//     echo "False";
// }

// LOGICAL OPERATORS
//  $mango = "green";
//  $size = "big";

//  if ($mango == "yellow" && $size == "big"){
//      echo "True";
//  } elseif ($mango == "green" && $size == "big"){
// echo "green big mango";
//  }
//  else{
//      echo "False";
//  }


// SWITCH STATEMENT
//  $mango = "yellow";
//  $size = "big";

//  switch ($mango){
//     case "yellow":
//         echo "yellow mango";
//         break;
    
//         case "green" :
//             echo "green mango";
//         break;

//         default:
//         echo "different mango";
//  }

// PHP LOOP

// WHILE LOOP
// $x = 1;
// while ($x <= 10){
// echo "x: ".$x. "<br/>";
// $x++;
// }

// DO WHILE LOOP
// do{
// echo "x: ".$x. "<br/>";
// $x++;
// }

// while ($x>=10);

// FOR LOOP
// for ($i = 0 ; $i<=10; $i++){
//     echo "i: ".$i. "<br/>"; 
// }

// FOR EACH LOOP
$array = array("Hello", 19, true, 19.3);

foreach($array as $values){
    echo $values."<br/>";

}

echo count($array)."<br/>";

for ($i=0; $i< count($array); $i++){
    echo $array[$i]."<br/>";
}




?>