
<?php
//man kan ha alla konstanter och variabler här uppe eller där nere i body.

//konstanter
define("SITE_TITLE" , "Web Academy AB");

//variabler
$name = "Mahmud al hakim";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exempel 4</title>
</head>
<body>

   <h1>PHP - Exempel 4</h1>
   <h1>Variabler och konstanter</h1>

   <h2> <?php echo SITE_TITLE ?> </h2>

<?php

echo "<h3>Hello $name!</h3>"; 

// OBS! om vi använder enkla citat blir såhär fel:
echo '<h3>Hello $name!</h3>'; 

//konkatenering i PHP (OBS! En punkt)
echo "Hej" . " " . $name . "!";



// Vi kan skriva break på 2 sätt:
//först:
echo "<br>";
//andra (efter raden är slut):
echo "Hej" . " " . $name . "!" . "<br>";


// när vi konkatenerar, vi kan använda break i slut av raden. (viktig!)
echo "Antal tecken" . ": " . strlen($name) . '<br>'; // 15
echo "Upper Case" . ": " . strtoupper($name) . '<br>'; // MAHMUD AL HAKIM
echo "Lower Case" . ": " . strtolower($name) . '<br>'; // mahmud al hakim
echo "Upper Case in the beginning of the first word" . ": " . ucfirst($name) . '<br>'; // Mahmud AL hakim
echo "Upper Case in the beginning of each word" . ": " . ucwords($name) . '<br>'; // Mahmud AL Hakim
echo "Reverse the text" . ": " . strrev($name) . '<br>'; // mikah AL dumham
echo "First lower case all the words and then Upper Case in the beginning of each word" . ": " . ucwords(strtolower($name)); // Mahmud Al Hakim


?>

</body>
</html>

