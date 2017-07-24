<?php
//The main application
include __DIR__.'/../vendor/autoload.php'; 

// Do the configuration
use De\Uniwue\RZ\Lyra\TestApp\App;
$paths = array(
    __DIR__."/../conf/",
);
$name = "test-app";

// Create and Run the App
$app = new App($name,$paths);
$app->configure();
$app->run();