<!-- 
a)Length of the string (strlen).
b)Word count (str_word_count)
c)Reversing a string (strrev),
d)Searching a component in a string (strpos), and
e)Replace a string (str_replace)
 -->

 <?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Harry");
echo "<br>";
echo str_replace("Harry", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy     ");
echo "<br>";
echo ltrim("    this is a good boy     ");
echo "</pre>";

?>
