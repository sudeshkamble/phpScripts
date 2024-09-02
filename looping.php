<?php
echo "<br>while example<br>";
$i = 1;
while($i <= 3){
    $i++;
    echo "The number is " . $i . "<br>";
}
?>

<?php
echo "<br>Do while example<br>";
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
?>


<?php
echo "<br>For loop example<br>";
for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}
?>

<?php
echo "<br>For each loop example<br>";
$colors = array("Red", "Green", "Blue");
 
// Loop through colors array
foreach($colors as $value){
    echo $value . "<br>";
}
?>

<?php
echo "<br>For each loop example 2<br>";
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>

