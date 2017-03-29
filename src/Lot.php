<?php

namespace bmwx591\yrl;

trait Lot
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
    public function setLotArea(Option $lotArea)
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
}
