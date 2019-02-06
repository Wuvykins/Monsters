<?php
/**
 * Created by PhpStorm.
 * User: Brandon, nalexander
 * Date: 2/6/2019
 * Time: 12:08 PM
 */

class Vampire extends Monster {

    private $_victims;

    function __construct($name = 'Ickis')
    {
        parent::__construct($name);
        $this->_victims = 0;
    }

    function Vampire()
    {

    }

    function attack()
    {

    }

    function getVictims()
    {

    }
}