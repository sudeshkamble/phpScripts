<?php
$my_str = 'World';
echo "Hello, $my_str!<br>";      // Displays: Hello World!
echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!
 
echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
echo 'I\'ll be back';            // Displays: I'll be back
?>

<?php
$my_str = 'Welcome to Tutorial Republic';
 
// Outputs: 28
echo strlen($my_str);
?>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
 
// Outputs: 9
echo str_word_count($my_str);
?>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);
?>