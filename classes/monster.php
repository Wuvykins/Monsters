<?php
/**
 * Created by PhpStorm.
 * User: nicalexander, brandonskar
 * Date: 2/6/19
 * Time: 11:38 AM
 */

class Monster
{
    private $_name;

    function __construct($name = 'Ikis')
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function attack()
    {
        echo "<p>" . $this->_name . " is attacking.</p>";
    }
}
