<?php
$color1 = "Red";
$color2 = "Green";
$color3 = "Blue";
print_r($color1);
?>

<?php
// Define an indexed array
$colors = array("Red", "Green", "Blue");
print_r($colors);
sort($colors);
print_r($colors);
rsort($colors);
print_r($colors);
?>

<?php
$colors[0] = "Red"; 
$colors[1] = "Green"; 
$colors[2] = "Blue"; 
print_r($colors);
?>

<?php
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
print_r($ages);
?>

<?php
$ages["Peter"] = "22";
$ages["Clark"] = "32";
$ages["John"] = "28";
print_r($ages);
asort($ages);
print_r($ages);
ksort($ages);
print_r($ages);
?>

<?php
// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
?>

<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
print_r($cities);
?>

<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
var_dump($cities);
?>