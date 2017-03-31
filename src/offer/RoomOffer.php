<?php


namespace bmwx591\yrl\offer;


class RoomOffer extends BaseOffer
{
    protected $roomsOffered;

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
        if (is_null($this->roomsOffered)) {
            $this->addError('Required offer field "roomsOffered" is empty');
        }
        return $this->hasErrors();
    }
}
