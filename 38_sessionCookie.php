<!-- 
syntax for creating a cookie: setcookie ( name , value ,expiration time , path = "");
Now name and value arguments are self-explanatory, the expiration time is when the cookie will expire [e.g., for 1 day, we will use 86400 seconds], and for path, we can use "/" to use it everywhere on the site. Now, let's create a cookie:
 -->
 <?php
echo "Welcome to the world of cookies<br>";
// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/"); 
echo "The cookie is set<br>";
?>

<?php
echo "Welcome to the world of cookies<br>";

// Cookies | Sessions

// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/"); 
echo "The cookie is set<br>";

?>
<!-- ------------------- -->
<?php

$cat = $_COOKIE['category'];
echo "Here is the list of all $cat";


?>
