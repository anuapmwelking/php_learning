<?php
$arr = array("key1"=>"value", "key2"=>"value", "key3"=>"value");
// or
$arr['key1'] = "value";

$arr['key2'] = "value";

$arr['key3'] = "value";

?>

<?php
$age = array("Ben"=>"35", "Stokes"=>"37", "Jimi"=>"43");
echo "Ben is " . $age['Ben'] . " years old.";
?>

<?php
// Another example

$student = array
("Maths"=>91,
"Physics"=>93,  
"Chemistry"=>93,
"English"=>94,  
"Computer"=>57);

echo "Marks in English" . $student['English'] . " years old.";
?>
<!-- Traversing in associative arrays -->
<?php
/*First create an associative array */

$student= array("Maths"=>56, "Physics"=>70,  
                  "Chemistry"=>94, "English"=>83,  
                  "Computer"=>58);

/* Loop through array using foreach */

echo "Looping using foreach: \n"; 
foreach ($student as $subject => $marks){ 
    echo "Student got ".$marks." in ".$subject."\n"; 
}
?>


<!-- ******************************** -->
<?php

echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 

// Associative arrays
$favCol = array('shubham' => 'red','rohan'=> 'green',
                    'harry'=> 'brown', 8=>'this' );

                    // echo $favCol['harry'];
                    // echo "<br>";
                    // echo $favCol['rohan'];
                    // echo "<br>";
                    // echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

?>
