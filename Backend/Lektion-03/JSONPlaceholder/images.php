<?php

/**
 * Att arbeta mot beffintliga servrar:
 * ----------------------------------
 * Hämta 10 bilder från JSONPlaceholder
 * 
 */


// Ange en endpoint
$url = "https://jsonplaceholder.typicode.com/albums/1/photos";
// Hämta data
$json = file_get_contents($url);

// 3. Konvertera JSON till en PHP-Array
// Takes a JSON encoded string and converts it into a PHP variable.
// https://www.php.net/manual/en/function.json-decode.php
$array = json_decode($json, true);

// Testa att skriva ut arrayen (temporärt)
// vi kan inte skriva ut en array med hjälp av "echo". 
// exempel: echo $array; resultatet blir warningar.

echo "<pre>";
print_r($array);
echo "</pre>";

// 4. välj data från arrayen

foreach ($array as $key => $value) {

    // echo $value['thumbnailUrl']; // den hämtar sökvägar till olika bilder
    if($key == 10) break;   // avbryta lopen när vi fick 10 bilder (visar inte mer är 10 bilder på skärmen)
    echo "<img src='$value[thumbnailUrl]'>"; // skickar till webläsaren imagetaggar

}