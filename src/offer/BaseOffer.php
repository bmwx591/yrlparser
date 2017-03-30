<?php


namespace bmwx591\yrl\offer;


use bmwx591\yrl\Option;

class BaseOffer extends Offer
{

    protected $propertyType;

    protected $roomSpace = [];

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

    public function addRoomSpace(Option $roomSpace)
    {
        array_push($this->roomSpace, $roomSpace);
        return $this;
    }

    /**
     * @param Option[] $roomSpace
     * @return $this
     */
    public function setRoomSpace(array $roomSpace)
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
    public function setLivingSpace(Option $livingSpace)
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
    public function setKitchenSpace(Option $kitchenSpace)
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

    /**
     * @return mixed
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * @param mixed $buildingType
     * @return $this
     */
    public function setBuildingType($buildingType)
    {
        $this->buildingType = $buildingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuildingSeries()
    {
        return $this->buildingSeries;
    }

    /**
     * @param mixed $buildingSeries
     * @return $this
     */
    public function setBuildingSeries($buildingSeries)
    {
        $this->buildingSeries = $buildingSeries;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuildingPhase()
    {
        return $this->buildingPhase;
    }

    /**
     * @param mixed $buildingPhase
     * @return $this
     */
    public function setBuildingPhase($buildingPhase)
    {
        $this->buildingPhase = $buildingPhase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuildingSection()
    {
        return $this->buildingSection;
    }

    /**
     * @param mixed $buildingSection
     * @return $this
     */
    public function setBuildingSection($buildingSection)
    {
        $this->buildingSection = $buildingSection;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReadyQuarter()
    {
        return $this->readyQuarter;
    }

    /**
     * @param mixed $readyQuarter
     * @return $this
     */
    public function setReadyQuarter($readyQuarter)
    {
        $this->readyQuarter = $readyQuarter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuildingState()
    {
        return $this->buildingState;
    }

    /**
     * @param mixed $buildingState
     * @return $this
     */
    public function setBuildingState($buildingState)
    {
        $this->buildingState = $buildingState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRubbishChute()
    {
        return $this->rubbishChute;
    }

    /**
     * @param mixed $rubbishChute
     * @return $this
     */
    public function setRubbishChute($rubbishChute)
    {
        $this->rubbishChute = $rubbishChute;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNewFlat()
    {
        return in_array($this->newFlat, ['да', 'true', '1', '+']);
    }

    public function isValidNewFlat()
    {
        return $this->isNewFlat() ?
            isset($this->floorsTotal, $this->buildingName, $this->yandexBuildingId,
            $this->builtYear, $this->readyQuarter, $this->buildingState) &&
            preg_match('/^\d{4}$/', $this->builtYear) : true;
    }

    public function setAttribute(array $attrNode)
    {
        if ('room-space' == $attrNode['name']) {
            return $this->addRoomSpace((new Option($this))->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        $isValid = parent::isValid();
        if ($isValid) {
            if (isset($this->propertyType, $this->rooms, $this->readyQuarter, $this->buildingState) &&
                $this->isValidNewFlat()) {
                return true;
            }
        }
        return $isValid;
    }
}
