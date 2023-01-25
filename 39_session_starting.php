<?php
// Start the session and get the data
session_start();
session_unset();
session_destroy();
echo "<br> You have been logged out";
?>
<!-- ***************** -->
<?php
// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite category is ". $_SESSION['favCat'];
    echo "<br>";
}
else{
    echo "Please login to continue";
}
?>
<!-- ****************** -->
<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Harry";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";
?>
