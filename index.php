<?php
/**
 * Created by PhpStorm.
 * User: Brandon, nalexander
 * Date: 2/6/2019
 * Time: 12:13 PM
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require fat-free
require_once('vendor/autoload.php');
session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Turn of fat free error reporting
$f3->set('DEBUG', 3);

require_once('model/data-validation.php');

//Define a default route
$f3->route('GET /', function() {
    $monster = new Monster();
    $template = new View();
    echo $template->render('views/home.html');
});