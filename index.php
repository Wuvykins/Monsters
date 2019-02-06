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
require_once('classes/monster.php');
require_once('classes/vampire.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn of fat free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    $monster = new Monster();
    echo $monster->attack();
    echo $monster->getName();
    $monster->setName("Gizmo");
    echo $monster->getName();
    $template = new Template();
    echo $template->render('views/home.html');

    $vampire = new Vampire();
    echo $vampire->attack();
    echo "<p>" . $vampire->getName() . " has bittin " . $vampire->getVictims() . "</p>";

    $werewolf = new WereWolf();
    echo $werewolf->attack();
    echo "<p>" . $werewolf->getName() . " has scatched " . $werewolf->getTransformed() . "</p>";

    echo $vampire->attack();
    echo "<p>" . $vampire->getName() . " has bittin " . $vampire->getVictims() . "</p>";

    echo $werewolf->attack();
    echo "<p>" . $werewolf->getName() . " has scatched " . $werewolf->getTransformed() . "</p>";
});

$f3->run();