<?php
class App
{
    public static $endpoint = "http://localhost/Uppgifter/Uppgift-03/Backend/";
    public static function main()
    {
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
                <img height=300 width=200 src='$product[image]' alt='$product[name]'> <br><br>
                <b> $product[name] </b><br><br>
                <b> Price: €$product[price] </b><br> 
                <b> Product details: </b>$product[description] <br>
                <b> Available quantity: $product[quantity]  </b><br> <br>
                </li>
                ";
        }
        $list .= "</ul>";

        echo $list;

        echo "<hr>";
    }
}
