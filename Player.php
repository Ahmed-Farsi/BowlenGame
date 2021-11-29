<?php

class Player
{
    private $name;
    private $pinsThrown = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function throwPins($one, $two)
    {
        $arraySuper = [$one,$two];
        $this->pinsThrown[] = $arraySuper;
    }

    public function getPinsThrown()
    {
        return $this->pinsThrown;
    }

    public function getName()
    {
        return $this->name;
    }
}
