<?php

namespace bmwx591\yrl\offer;

use bmwx591\yrl\Option;

/**
 * Class BaseOffer
 * @package bmwx591\yrl\offer
 */
class BaseOffer extends Offer
{
    protected $propertyType;

    /**
     * @var Option[]
     */
    protected $roomSpace = [];

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
     * @return Option[]
     */
    public function getRoomSpace()
    {
        return $this->roomSpace;
    }

    /**
     * @param Option $roomSpace
     * @return $this
     */
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
     * @return string
     */
    public function getNewFlat()
    {
        return $this->newFlat;
    }

    /**
     * @param string $newFlat
     * @return $this
     */
    public function setNewFlat($newFlat)
    {
        $this->newFlat = $newFlat;
        return $this;
    }

    /**
     * @return string
     */
    public function getApartments()
    {
        return $this->apartments;
    }

    /**
     * @param string $apartments
     * @return $this
     */
    public function setApartments($apartments)
    {
        $this->apartments = $apartments;
        return $this;
    }

    /**
     * @return string
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * @param string $studio
     * @return $this
     */
    public function setStudio($studio)
    {
        $this->studio = $studio;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenPlan()
    {
        return $this->openPlan;
    }

    /**
     * @param string $openPlan
     * @return $this
     */
    public function setOpenPlan($openPlan)
    {
        $this->openPlan = $openPlan;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomsType()
    {
        return $this->roomsType;
    }

    /**
     * @param string $roomsType
     * @return $this
     */
    public function setRoomsType($roomsType)
    {
        $this->roomsType = $roomsType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param string $balcony
     * @return $this
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
        return $this;
    }

    /**
     * @return string
     */
    public function getBathroomUnit()
    {
        return $this->bathroomUnit;
    }

    /**
     * @param string $bathroomUnit
     * @return $this
     */
    public function setBathroomUnit($bathroomUnit)
    {
        $this->bathroomUnit = $bathroomUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getKitchenFurniture()
    {
        return $this->kitchenFurniture;
    }

    /**
     * @param string $kitchenFurniture
     * @return $this
     */
    public function setKitchenFurniture($kitchenFurniture)
    {
        $this->kitchenFurniture = $kitchenFurniture;
        return $this;
    }

    /**
    * @return string
    */
    public function getTelevision()
    {
        return $this->television;
    }

    /**
     * @param string $television
     * @return $this
     */
    public function setTelevision($television)
    {
        $this->television = $television;
        return $this;
    }

    /**
     * @return string
     */
    public function getWashingMachine()
    {
        return $this->washingMachine;
    }

    /**
     * @param string $washingMachine
     * @return $this
     */
    public function setWashingMachine($washingMachine)
    {
        $this->washingMachine = $washingMachine;
        return $this;
    }

    /**
     * @return string
     */
    public function getDishwasher()
    {
        return $this->dishwasher;
    }

    /**
     * @param string $dishwasher
     * @return $this
     */
    public function setDishwasher($dishwasher)
    {
        $this->dishwasher = $dishwasher;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefrigerator()
    {
        return $this->refrigerator;
    }

    /**
     * @param string $refrigerator
     * @return $this
     */
    public function setRefrigerator($refrigerator)
    {
        $this->refrigerator = $refrigerator;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuiltInTech()
    {
        return $this->builtInTech;
    }

    /**
     * @param string $builtInTech
     * @return $this
     */
    public function setBuiltInTech($builtInTech)
    {
        $this->builtInTech = $builtInTech;
        return $this;
    }

    /**
     * @return string
     */
    public function getYandexBuildingId()
    {
        return $this->yandexBuildingId;
    }

    /**
     * @param string $yandexBuildingId
     * @return $this
     */
    public function setYandexBuildingId($yandexBuildingId)
    {
        $this->yandexBuildingId = $yandexBuildingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * @param string $buildingType
     * @return $this
     */
    public function setBuildingType($buildingType)
    {
        $this->buildingType = $buildingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingSeries()
    {
        return $this->buildingSeries;
    }

    /**
     * @param string $buildingSeries
     * @return $this
     */
    public function setBuildingSeries($buildingSeries)
    {
        $this->buildingSeries = $buildingSeries;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingPhase()
    {
        return $this->buildingPhase;
    }

    /**
     * @param string $buildingPhase
     * @return $this
     */
    public function setBuildingPhase($buildingPhase)
    {
        $this->buildingPhase = $buildingPhase;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingSection()
    {
        return $this->buildingSection;
    }

    /**
     * @param string $buildingSection
     * @return $this
     */
    public function setBuildingSection($buildingSection)
    {
        $this->buildingSection = $buildingSection;
        return $this;
    }

    /**
     * @return integer
     */
    public function getReadyQuarter()
    {
        return $this->readyQuarter;
    }

    /**
     * @param integer $readyQuarter
     * @return $this
     */
    public function setReadyQuarter($readyQuarter)
    {
        $this->readyQuarter = $readyQuarter;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingState()
    {
        return $this->buildingState;
    }

    /**
     * @param string $buildingState
     * @return $this
     */
    public function setBuildingState($buildingState)
    {
        $this->buildingState = $buildingState;
        return $this;
    }

    /**
     * @return string
     */
    public function getRubbishChute()
    {
        return $this->rubbishChute;
    }

    /**
     * @param string $rubbishChute
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

    public function setAttribute(array $attrNode)
    {
        $name = $attrNode['name'];
        if ('room-space' == $name) {
            return $this->addRoomSpace((new Option())->setOptions($attrNode));
        }
        return parent::setAttribute($attrNode);
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        parent::isValid();
        if (is_null($this->propertyType)) {
            $this->addError('Required offer field "propertyType" is empty');
        }
        if (is_null($this->rooms)) {
            $this->addError('Required offer field "rooms" is empty');
        }
        if (!($this instanceof LotOffer) && is_null($this->area)) {
            $this->addError('Required offer field "area" is empty');
        }
        if ($this->isNewFlat()) {
            if (is_null($this->floorsTotal)) {
                $this->addError('Required offer field "floorsTotal" is empty');
            }
            if (is_null($this->buildingName)) {
                $this->addError('Required offer field "buildingName" is empty');
            }
            if (is_null($this->yandexBuildingId)) {
                $this->addError('Required offer field "yandexBuildingId" is empty');
            }
            if (is_null($this->builtYear)) {
                $this->addError('Required offer field "builtYear" is empty');
            }
            if (is_null($this->readyQuarter)) {
                $this->addError('Required offer field "readyQuarter" is empty');
            }
            if (is_null($this->buildingState)) {
                $this->addError('Required offer field "buildingState" is empty');
            }
            if (!preg_match('/^\d{4}$/', $this->builtYear)) {
                $this->addError('"builtYear" must be number with 4 digits');
            }
        }
        return $this->hasErrors();
    }
}
