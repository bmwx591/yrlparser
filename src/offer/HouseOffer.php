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

    public function isValid()
    {
        $isValid = parent::isValid();
        if ($isValid) {
            if (isset($this->area)) {
                return true;
            }
        }
        return $isValid;
    }
}
