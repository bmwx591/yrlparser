<?php

namespace bmwx591\yrl\offer;

/**
 * Class HouseOffer
 * @package bmwx591\yrl\offer
 */
class HouseOffer extends BaseOffer
{
    protected $alarm;

    /**
     * @return string
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * @param string $alarm
     * @return $this
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
        return $this;
    }
}
