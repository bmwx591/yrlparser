<?php


namespace bmwx591\yrl;


class BaseOffer extends Offer
{

    protected $propertyType;

    protected $roomSpace;

    protected $livingSpace;

    protected $kitchenSpace;

    protected $newFlat;

    protected $apartments;

    protected $studio;

    protected $openPlan;

    protected $roomsType;

    protected $balcony;

    protected $bathroomUnit;

    protected $kitchenFurniture;

    protected $television;

    protected $washingMachine;

    protected $dishwasher;

    protected $refrigerator;

    protected $builtInTech;

    protected $yandexBuildingId;

    protected $buildingType;

    protected $buildingSeries;

    protected $buildingPhase;

    protected $buildingSection;

    protected $readyQuarter;

    protected $buildingState;

    protected $rubbishChute;

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPropertyType($value)
    {
        $this->propertyType = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoomSpace()
    {
        return $this->roomSpace;
    }

    /**
     * @param mixed $roomSpace
     * @return $this
     */
    public function setRoomSpace($roomSpace)
    {
        $this->roomSpace = $roomSpace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLivingSpace()
    {
        return $this->livingSpace;
    }

    /**
     * @param mixed $livingSpace
     * @return $this
     */
    public function setLivingSpace($livingSpace)
    {
        $this->livingSpace = $livingSpace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKitchenSpace()
    {
        return $this->kitchenSpace;
    }

    /**
     * @param mixed $kitchenSpace
     * @return $this
     */
    public function setKitchenSpace($kitchenSpace)
    {
        $this->kitchenSpace = $kitchenSpace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewFlat()
    {
        return $this->newFlat;
    }

    /**
     * @param mixed $newFlat
     * @return $this
     */
    public function setNewFlat($newFlat)
    {
        $this->newFlat = $newFlat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApartments()
    {
        return $this->apartments;
    }

    /**
     * @param mixed $apartments
     * @return $this
     */
    public function setApartments($apartments)
    {
        $this->apartments = $apartments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * @param mixed $studio
     * @return $this
     */
    public function setStudio($studio)
    {
        $this->studio = $studio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpenPlan()
    {
        return $this->openPlan;
    }

    /**
     * @param mixed $openPlan
     * @return $this
     */
    public function setOpenPlan($openPlan)
    {
        $this->openPlan = $openPlan;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoomsType()
    {
        return $this->roomsType;
    }

    /**
     * @param mixed $roomsType
     * @return $this
     */
    public function setRoomsType($roomsType)
    {
        $this->roomsType = $roomsType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param mixed $balcony
     * @return $this
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBathroomUnit()
    {
        return $this->bathroomUnit;
    }

    /**
     * @param mixed $bathroomUnit
     * @return $this
     */
    public function setBathroomUnit($bathroomUnit)
    {
        $this->bathroomUnit = $bathroomUnit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKitchenFurniture()
    {
        return $this->kitchenFurniture;
    }

    /**
     * @param mixed $kitchenFurniture
     * @return $this
     */
    public function setKitchenFurniture($kitchenFurniture)
    {
        $this->kitchenFurniture = $kitchenFurniture;
        return $this;
    }

    /**
    * @return mixed
    */
    public function getTelevision()
    {
        return $this->television;
    }

    /**
     * @param mixed $television
     * @return $this
     */
    public function setTelevision($television)
    {
        $this->television = $television;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWashingMachine()
    {
        return $this->washingMachine;
    }

    /**
     * @param mixed $washingMachine
     * @return $this
     */
    public function setWashingMachine($washingMachine)
    {
        $this->washingMachine = $washingMachine;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDishwasher()
    {
        return $this->dishwasher;
    }

    /**
     * @param mixed $dishwasher
     * @return $this
     */
    public function setDishwasher($dishwasher)
    {
        $this->dishwasher = $dishwasher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefrigerator()
    {
        return $this->refrigerator;
    }

    /**
     * @param mixed $refrigerator
     */
    public function setRefrigerator($refrigerator)
    {
        $this->refrigerator = $refrigerator;
    }

    /**
     * @return mixed
     */
    public function getBuiltInTech()
    {
        return $this->builtInTech;
    }

    /**
     * @param mixed $builtInTech
     * @return $this
     */
    public function setBuiltInTech($builtInTech)
    {
        $this->builtInTech = $builtInTech;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYandexBuildingId()
    {
        return $this->yandexBuildingId;
    }

    /**
     * @param mixed $yandexBuildingId
     * @return $this
     */
    public function setYandexBuildingId($yandexBuildingId)
    {
        $this->yandexBuildingId = $yandexBuildingId;
        return $this;
    }


    public function isValid()
    {
        // TODO: Implement isValid() method.
    }
}
