<?php

include_once("class.php");
include_once("male.php");

// $std_117 = new Student("Mike", "18", "Quezon City", "Grade 11");


// echo $std_117->get_name();
// echo $std_117->get_full_student_info();


$std_118 = new Male("Mike", "18", "Quezon City", "Grade 11");

echo $std_118->get_color_uniform();

?>