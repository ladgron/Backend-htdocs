<?php

// Säkerhets- och prestandaoptimering – Steg 1
// Skapa en funktion som hämtar data från en endpoint
// Funktionen skickar en felsignal (exception) vid fel!

// vi användre :: för att anropa statistika metoder och variabler i php
//App::main();

class App
{

public static $endpoint = "https://jsonplaceholder.typicode.com/users";

public static function main()
{

    try {
        $array = self::getData();
        //print_r($array);
        self::viewData($array);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


public static function getData()
{

    $json = @file_get_contents(self::$endpoint);
    // @ = Error Control Operator

    if (!$json)
        throw new Exception("cannot access" . self::$endpoint); //if the address is wrong or system is down, we get this error

    // Test
    // echo $json;

    // Retunera data som en PHP-Array
    return json_decode($json, true);
}

public static function viewData($array){

    $table = "<table class='table'>";
    $table .= "<tr><th>Name</th><th>Email</th></tr>";
    foreach ($array as $key => $value) {
        $table .= "<tr>
                    <td>$value[name] </td>
                    <td>$value[email] </td>
                   </tr>";
    }
    $table .= "</table>";

    echo $table;
}

}