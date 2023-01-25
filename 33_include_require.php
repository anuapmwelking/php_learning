<?php
// include means that file is important while loading page but if the file is not available then it will proceed further without any error

// require means file is important and without it the page can't load

// include '_dbconnect1.php'; 
require '_dbconnect.php';


$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br>";
}
?>
