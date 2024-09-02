<?php
$a = 123; // decimal number
var_dump($a);
echo "<br>";
 
$b = -123; // a negative number
var_dump($b);
echo "<br>";
 
$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";
 
$d = 0123; // octal number
var_dump($d);
?>


<?php
$a = 'Hello world!';
echo $a;
echo "<br>";
 
$b = "Hello world!";
echo $b;
echo "<br>";
 
$c = 'Stay here, I\'ll be back.';
echo $c;
?>

<?php
$a = 1.234;
var_dump($a);
echo "<br>";
 
$b = 10.2e3;
var_dump($b);
echo "<br>";
 
$c = 4E-10;
var_dump($c);
?>

<?php
// Assign the value TRUE to a variable
$show_error = true;
var_dump($show_error);
?>

<?php
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);
?>

<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
?>

<?php
$a = NULL;
var_dump($a);
echo "<br>";
 
$b = "Hello World!";
$b = NULL;
var_dump($b);
?>

<?php
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";
 
// Connect to MySQL database server with default setting
$link = mysqli_connect("localhost", "root", "");
var_dump($link);
?>

