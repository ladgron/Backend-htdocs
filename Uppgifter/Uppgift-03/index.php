<?php

/**
 * WebshopAPI
 * En egenutvecklad version av Api
 */
header("Content-Type: application/json; charset=UTF-8");

include('product.php');
include('productArray.php');
include('App.php');


$products = array(); {
    $product = array(
        "product"     => $product,
        "description" => $description,
        "price"       => $price
    );
    array_push($products, $product);
}

// 4. Konvertera PHP-arrayen till en JSON-string.
echo json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
