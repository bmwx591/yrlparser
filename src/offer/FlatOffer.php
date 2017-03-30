<?php


namespace bmwx591\yrl\offer;


class FlatOffer extends BaseOffer
{
    protected $roomsOffered;

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

    /**
     * @return mixed
     */
    public function getRoomsOffered()
    {
        return $this->roomsOffered;
    }

    /**
     * @param mixed $roomsOffered
     * @return $this
     */
    public function setRoomsOffered($roomsOffered)
    {
        $this->roomsOffered = $roomsOffered;
        return $this;
    }

    public function isValid()
    {
        $isValid = parent::isValid();
        if ($isValid) {
            if (isset($this->area, $this->studio, $this->openPlan)) {
                return true;
            }
        }
        return $isValid;
    }
}
