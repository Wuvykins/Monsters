<?php
/**
 * Created by PhpStorm.
 * User: nicalexander brandonskar
 * Date: 2/6/19
 * Time: 1:16 PM
 */
class WereWolf extends Monster
{
    //private fields have underscores
    private $_transformed;

    public function __construct($name = 'jacob')
    {
        parent::__construct($name);
    }

    function attack()
    {
        echo "<p>" . $this->getName() . " is scratching</p>";
        $this->_transformed++;
    }

    function getTransformed()
    {
        return $this->_transformed;
    }
}