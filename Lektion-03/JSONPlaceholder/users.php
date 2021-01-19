<?php

/**
 * Att arbeta mot beffintliga servrar:
 * ----------------------------------
 * Hämta alla användare (users) från JSONPlaceholder
 * Visa en HTML-lista över användare
 */

// 1. Ange en endpoint/resurs
$url = "https://jsonplaceholder.typicode.com/users";


// 2. Hämta data i JSON-format
$json = file_get_contents ($url);

// Testa att skriva ut (temporärt)
// echo $json;

// 3. Konvertera JSON till en PHP-Array
// Takes a JSON encoded string and converts it into a PHP variable.
// https://www.php.net/manual/en/function.json-decode.php
$array = json_decode($json, true);

// Testa att skriva ut arrayen (temporärt)
// vi kan inte skriva ut en array med hjälp av "echo". 
// exempel: echo $array; resultatet blir warningar.

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// 4. välj data från arrayen
echo "<ul>"; // to get numbers instead of bullets for each name, we must use <ol> instead of <ul>
foreach ($array as $key => $value) {
    // echo "Key: " . $key;  // 0123456789
    // echo '<hr>';
    // echo "Value: ";
    // print_r($value);  // OBS! $value är arrayer. 
    // vi kan inte skriva ut en array med hjälp av "echo". 
    // det är därför vi använder print_r att skriva ut arrayen.
    
    // echo '<hr>';
    // echo "Name: " . $value['name'];
    // echo '<br>';

    // snyggare sätt att skriva ut namn i listan:
    echo "<li>" . $value['name'] . "</li>";
    
}
echo "</ul>";