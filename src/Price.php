<?php

namespace bmwx591\yrl;

/**
 * Class Price
 * @package bmwx591\yrl
 */
class Price extends NestedObject
{
    protected $value;

    protected $currency;

    protected $unit;

    protected $taxationForm;

    protected $period;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
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
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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

    /**
     * @return string
     */
    public function getTaxationForm()
    {
        return $this->taxationForm;
    }

    /**
     * @param string $taxationForm
     * @return $this
     */
    public function setTaxationForm($taxationForm)
    {
        $this->taxationForm = $taxationForm;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        parent::isValid();
        if (is_null($this->value)) {
            $this->addError('Required price field "value" is empty');
        }
        if (is_null($this->currency)) {
            $this->addError('Required price field "currency" is empty');
        }
        return $this->hasErrors();
    }

}
