<?php
/**
 * @method \DateTime datetime() Description
 */
class Baz5
{
    
    private $container;
    
    public function __construct() {
        $this->container['A'] = new DateTime('2000-01-01');
    }

    public function __get($name)
    {
        return $this->container[$name];
    }
}

$baz5 = new Baz5();