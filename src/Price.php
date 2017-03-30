<?php


namespace bmwx591\yrl;


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
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotForAgents()
    {
        return $this->notForAgents;
    }

    /**
     * @param mixed $notForAgents
     * @return $this
     */
    public function setNotForAgents($notForAgents)
    {
        $this->notForAgents = $notForAgents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * @param mixed $prepayment
     * @return $this
     */
    public function setPrepayment($prepayment)
    {
        $this->prepayment = $prepayment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRentPledge()
    {
        return $this->rentPledge;
    }

    /**
     * @param mixed $rentPledge
     * @return $this
     */
    public function setRentPledge($rentPledge)
    {
        $this->rentPledge = $rentPledge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgentFee()
    {
        return $this->agentFee;
    }

    /**
     * @param mixed $agentFee
     * @return $this
     */
    public function setAgentFee($agentFee)
    {
        $this->agentFee = $agentFee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWithPets()
    {
        return $this->withPets;
    }

    /**
     * @param mixed $withPets
     * @return $this
     */
    public function setWithPets($withPets)
    {
        $this->withPets = $withPets;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWithChildren()
    {
        return $this->withChildren;
    }

    /**
     * @param mixed $withChildren
     * @return $this
     */
    public function setWithChildren($withChildren)
    {
        $this->withChildren = $withChildren;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCleaningIncluded()
    {
        return $this->cleaningIncluded;
    }

    /**
     * @param mixed $cleaningIncluded
     * @return $this
     */
    public function setCleaningIncluded($cleaningIncluded)
    {
        $this->cleaningIncluded = $cleaningIncluded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxationForm()
    {
        return $this->taxationForm;
    }

    /**
     * @param mixed $taxationForm
     * @return $this
     */
    public function setTaxationForm($taxationForm)
    {
        $this->taxationForm = $taxationForm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param mixed $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinRentPeriod()
    {
        return $this->minRentPeriod;
    }

    /**
     * @param mixed $minRentPeriod
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
        $isValid = parent::isValid();
        if ($isValid) {
            if (isset($this->value, $this->currency)) {
                return true;
            }
        }
        return $isValid;
    }

}
