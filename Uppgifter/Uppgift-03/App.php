<?php

function viewData($products)
{
    $list = "<ul class='list-group'>";
    foreach ($products as $product) {
        $list .= "
            <li class='list-group-item'>
            <b> $product[product] </b><br><br>
            <b> Product details: </b>$product[description] <br> <br>
            <b> Price: €$product[price] </b><br> 
            </li>
            ";
    }
    $list .= "</ul>";

    echo $list;

}