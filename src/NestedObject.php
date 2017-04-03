<?php

namespace bmwx591\yrl;

/**
 * Class NestedObject
 * @package bmwx591\yrl
 */
abstract class NestedObject extends Object
{

    protected $parent;

    public function __construct($parent)
    {
        if ($parent instanceof Object) {
            $this->parent = $parent;
        } else {
            throw new \InvalidArgumentException('Parent must be instance of Object class');
        }
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function isValid()
    {
        return true;
    }
}
