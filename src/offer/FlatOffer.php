<?php


namespace bmwx591\yrl\offer;

/**
 * Class FlatOffer
 * @package bmwx591\yrl\offer
 */
class FlatOffer extends BaseOffer
{
    protected $roomsOffered;

    protected $flatAlarm;

    /**
     * @return string
     */
    public function getFlatAlarm()
    {
        return $this->flatAlarm;
    }

    /**
     * @param string $flatAlarm
     * @return $this
     */
    public function setFlatAlarm($flatAlarm)
    {
        $this->flatAlarm = $flatAlarm;
        return $this;
    }

    /**
     * @return integer
     */
    public function getRoomsOffered()
    {
        return $this->roomsOffered;
    }

    /**
     * @param integer $roomsOffered
     * @return $this
     */
    public function setRoomsOffered($roomsOffered)
    {
        $this->roomsOffered = $roomsOffered;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        parent::isValid();
        if (is_null($this->studio)) {
            $this->addError('Required offer field "studio" is empty');
        }
        if (is_null($this->openPlan)) {
            $this->addError('Required offer field "openPlan" is empty');
        }
        return $this->hasErrors();
    }
}
