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

    protected $notForAgents;

    protected $prepayment;

    protected $rentPledge;

    protected $agentFee;

    protected $withPets;

    protected $withChildren;

    protected $cleaningIncluded;

    protected $taxationForm;

    protected $period;

    protected $minRentPeriod;

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
    public function getNotForAgents()
    {
        return $this->notForAgents;
    }

    /**
     * @param string $notForAgents
     * @return $this
     */
    public function setNotForAgents($notForAgents)
    {
        $this->notForAgents = $notForAgents;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * @param string $prepayment
     * @return $this
     */
    public function setPrepayment($prepayment)
    {
        $this->prepayment = $prepayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getRentPledge()
    {
        return $this->rentPledge;
    }

    /**
     * @param string $rentPledge
     * @return $this
     */
    public function setRentPledge($rentPledge)
    {
        $this->rentPledge = $rentPledge;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgentFee()
    {
        return $this->agentFee;
    }

    /**
     * @param float $agentFee
     * @return $this
     */
    public function setAgentFee($agentFee)
    {
        $this->agentFee = $agentFee;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithPets()
    {
        return $this->withPets;
    }

    /**
     * @param string $withPets
     * @return $this
     */
    public function setWithPets($withPets)
    {
        $this->withPets = $withPets;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithChildren()
    {
        return $this->withChildren;
    }

    /**
     * @param string $withChildren
     * @return $this
     */
    public function setWithChildren($withChildren)
    {
        $this->withChildren = $withChildren;
        return $this;
    }

    /**
     * @return string
     */
    public function getCleaningIncluded()
    {
        return $this->cleaningIncluded;
    }

    /**
     * @param string $cleaningIncluded
     * @return $this
     */
    public function setCleaningIncluded($cleaningIncluded)
    {
        $this->cleaningIncluded = $cleaningIncluded;
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
     * @return string
     */
    public function getMinRentPeriod()
    {
        return $this->minRentPeriod;
    }

    /**
     * @param string $minRentPeriod
     * @return $this
     */
    public function setMinRentPeriod($minRentPeriod)
    {
        $this->minRentPeriod = $minRentPeriod;
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
