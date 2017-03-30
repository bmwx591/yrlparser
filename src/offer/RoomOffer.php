<?php


namespace bmwx591\yrl\offer;


class RoomOffer extends BaseOffer
{
    protected $roomsOffered;

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
            if (isset($this->roomsOffered, $this->area)) {
                return true;
            }
        }
        return $isValid;
    }
}
