<?php

/*** COMPOSER AUTOLOAD & APP CONFIGS ***/
require './App/config.php';
require './vendor/autoload.php';


/*** INIT SLIM OBJECT INSTANCE ***/
$app = new \Slim\App(["settings" => $config]);



/*** ROUTES ***/
require './App/routes.php';



/*** RUN APPLICATION ***/
$app->run();