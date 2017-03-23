<?php


namespace bmwx591\yrl;


class FlatOffer extends BaseOffer
{
    protected $flatAlarm;

    /**
     * @return mixed
     */
    public function getFlatAlarm()
    {
        return $this->flatAlarm;
    }

    /**
     * @param mixed $flatAlarm
     * @return $this
     */
    public function setFlatAlarm($flatAlarm)
    {
        $this->flatAlarm = $flatAlarm;
        return $this;
    }
}
