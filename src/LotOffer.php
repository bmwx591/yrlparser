<?php

namespace bmwx591\yrl;

class LotOffer extends BaseOffer
{

    protected $lotArea;

    protected $lotType;

    /**
     * @return mixed
     */
    public function getLotArea()
    {
        return $this->lotArea;
    }

    /**
     * @param mixed $lotArea
     * @return $this
     */
    public function setLotArea($lotArea)
    {
        $this->lotArea = $lotArea;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLotType()
    {
        return $this->lotType;
    }

    /**
     * @param mixed $lotType
     * @return $this
     */
    public function setLotType($lotType)
    {
        $this->lotType = $lotType;
        return $this;
    }


    public function isValid()
    {
        $isValid = parent::isValid();
        if ($isValid) {

        }
        return $isValid;
    }
}
