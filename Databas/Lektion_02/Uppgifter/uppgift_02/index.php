<?php

/**********************************************
 *       
 *        En Databasbaserad Applikation
 *        -----------------------------
 *       
 **********************************************/

require_once("models/Database.php");
require_once("models/Model.php");
require_once("views/View.php");
require_once("controllers/Controller.php");

$database   = new Database("localhost", "webbshopdb", "root", "root");
$model      = new Model($database);          // Dependency Injection
$view       = new View();
$controller = new Controller($model, $view); // Dependency Injection

$controller->main();