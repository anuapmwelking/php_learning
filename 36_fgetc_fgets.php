<!-- 
fgets():
The fgets() function in PHP is an inbuilt function that is used to return a line from an open file. We can use this function inside a while loop to read files line by line. For example:

 -->
<?php
// Reading a file line by line
$fptr = fopen("myfile.txt", "r");
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
?>
<!-- ******************** -->
<!-- 
fgetc():
The fgetc() function in PHP is an inbuilt function that is used to return a single character from an open file. This function reads the file character by character. For example: 
 -->
<?php
// Reading a file character by character
$fptr = fopen("myfile.txt", "r");
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
?>

<!-- ********** -->
<?php
// Write a program which reads the content of a file until . has been encountered
$fptr = fopen("myfile.txt", "r");
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>

<!-- *************************** -->
<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));

/*
// Reading a file line by line
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/

// echo fgetc($fptr); 
/*
// Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
*/
// Write a program which reads the content of a file until . has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>
