<?php

namespace bmwx591\yrl;

/**
 * Class Option
 * @package bmwx591\yrl
 */
class Option extends NestedObject
{
    protected $value;

    protected $unit;

    /**
     * @return float
     */
    public function getValue()
    {
        return (float) str_replace(',', '.', $this->value);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }
}
