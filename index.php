<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file autoload.php
require_once('vendor/autoload.php');

//Create an instance of the Base class/ instantiate Fat-Free
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function()
{
    echo'<h1>Hola!</h1>';
});

//Run fat free F3
$f3->run();
