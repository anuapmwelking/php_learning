<!-- get method -->
<html>
   <body>
      <form action = "<?php $_PHP_SELF?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>   
   </body>
</html>

<!-- post method -->
<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   </body>
</html>

<!-- how to handle get and post request -->
<?php
   if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
   }
?>

<!-- method to check the submitted method type -->
<?php
$_SERVER['REQUEST_METHOD'] == 'POST'
$_SERVER['REQUEST_METHOD'] ==  'GET'
?>