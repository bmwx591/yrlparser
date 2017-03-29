<?php


namespace bmwx591\yrl\offer;


class HouseOffer extends BaseOffer
{
    protected $alarm;

    /**
     * @return mixed
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * @param mixed $alarm
     * @return $this
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
        return $this;
    }
}
