<?php

class App
{
    public static $endpoint = "https://fakestoreapi.com/products";
    public static function main($productType)
    {
        if ($productType) {
            self::$endpoint = self::$endpoint . "/category/" . $productType;
        }

        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);

        if (!$json) {
            throw new Exception("
                <div class='alert alert-danger' role='alert'>
                    Problem med att hämta infomration just nu!
                </div>
            ");
        }
        return json_decode($json, true);
    }

    public static function viewData($products)
    {
        $list = "<ul class='list-group'>";
        foreach ($products as $product) {
            $list .= "
                <li class='list-group-item'>
                <img height=200 src='$product[image]' alt='$product[title]'>
                <b> $product[title] </b><br> 
                <b> €$product[price] </b><br> 
                $product[description] <br> 
                </li>
                ";
        }
        $list .= "</ul>";

        echo $list;

        echo "<hr>";
    }
}
