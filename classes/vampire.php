<?php
/**
 * Created by PhpStorm.
 * User: Brandon, nalexander
 * Date: 2/6/2019
 * Time: 12:08 PM
 */

class Vampire extends Monster {

    private $_victims;

    function __construct($name = 'Edward')
    {
        parent::setName($name);
        $this->_victims = 0;
    }

    function attack()
    {
        echo "<p>" . $this->getName() . " is biting</p>";
        $this->_victims++;
    }

    function getVictims()
    {
        return $this->_victims;
    }
}