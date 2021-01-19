<?php

class App
{

    // Hämta 10 namn från 
    // https://namnapi.se/
    public static $endpoint = "https://api.namnapi.se/v2/names.json";
    /** When an API interacts with another system, the touchpoints of this communication are considered endpoints.
    * For APIs, an endpoint can include a URL of a server or service. 
    * Each endpoint is the location from which APIs can access the resources they need to carry out their function.
    * APIs work using ‘requests’ and ‘responses.’ 
    * When an API requests information from a web application or web server, it will receive a response.
    * The place that APIs send requests and where the resource lives, is called an endpoint.
    */

    public static function main($count)
    {

        if($count){
            self::$endpoint = self::$endpoint . "?limit=$count";
            //echo  self::$endpoint; 
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
                    Problem med att hämta namn just nu!
                </div>
            ");
        }

        return json_decode($json, true);

    }

    public static function viewData($array){

        $names = $array['names'];

        $list = "<ul class='list-group'>";
        foreach ($names as $key => $name) {
            $list .= "
                    <li class='list-group-item'>
                        $name[firstname] $name[surname]
                    </li>
                    ";
        }
        $list .= "</ul>";
        
        echo $list;

    }

}