<?php
// Assign value to variable
$color = "blue";
 
// Try to print variable value
echo "The color of the sky is " . $color . "<br>";
echo "The color of the sky is " . $Color . "<br>";
echo "The color of the sky is " . $COLOR . "<br>";
?>

<?php
// Defining constant
define("SITE_URL", "https://www.test.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
?>

<?php
// Assign value to variable
$color = "blue";
 
// Get the type of a variable
echo gettype($color) . "<br>";
echo GETTYPE($color) . "<br>";
?>