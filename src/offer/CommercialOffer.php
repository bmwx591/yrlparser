<?php

namespace bmwx591\yrl\offer;

class CommercialOffer extends Offer
{
    protected $commercialType;

    protected $commercialBuildingType;

    protected $purpose;

    protected $purposeWarehouse;

    protected $lotNumber;

    protected $manuallyAdded;

    protected $roomFurniture;

    protected $entranceType;

    protected $phoneLines;

    protected $addingPhoneOnRequest;

    protected $selfSelectionTelecom;

    protected $airConditioner;

    protected $ventilation;

    protected $fireAlarm;

    protected $windowType;

    protected $officeClass;

    protected $accessControlSystem;

    protected $twentyFourSeven;

    protected $parkingPlaces;

    protected $parkingPlacePrice;

    protected $parkingGuest;

    protected $parkingGuestPlaces;

    protected $security;

    protected $eatingFacilities;

    protected $responsibleStorage;

    protected $palletPrice;

    protected $freightElevator;

    protected $truckEntrance;

    protected $ramp;

    protected $railway;

    protected $officeWarehouse;

    protected $openArea;

    protected $serviceThreePl;

    protected $temperatureComment;

    protected $cadastralNumber;

    /**
     * @return string
     */
    public function getCommercialType()
    {
        return $this->commercialType;
    }

    /**
     * @param string $commercialType
     * @return $this
     */
    public function setCommercialType($commercialType)
    {
        $this->commercialType = $commercialType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommercialBuildingType()
    {
        return $this->commercialBuildingType;
    }

    /**
     * @param mixed $commercialBuildingType
     * @return $this
     */
    public function setCommercialBuildingType($commercialBuildingType)
    {
        $this->commercialBuildingType = $commercialBuildingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param mixed $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurposeWarehouse()
    {
        return $this->purposeWarehouse;
    }

    /**
     * @param mixed $purposeWarehouse
     */
    public function setPurposeWarehouse($purposeWarehouse)
    {
        $this->purposeWarehouse = $purposeWarehouse;
    }

    /**
     * @return mixed
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * @param mixed $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCadastralNumber()
    {
        return $this->cadastralNumber;
    }

    /**
     * @param mixed $cadastralNumber
     * @return $this
     */
    public function setCadastralNumber($cadastralNumber)
    {
        $this->cadastralNumber = $cadastralNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoomFurniture()
    {
        return $this->roomFurniture;
    }

    /**
     * @param mixed $roomFurniture
     * @return $this
     */
    public function setRoomFurniture($roomFurniture)
    {
        $this->roomFurniture = $roomFurniture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntranceType()
    {
        return $this->entranceType;
    }

    /**
     * @param mixed $entranceType
     * @return $this
     */
    public function setEntranceType($entranceType)
    {
        $this->entranceType = $entranceType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneLines()
    {
        return $this->phoneLines;
    }

    /**
     * @param mixed $phoneLines
     * @return $this
     */
    public function setPhoneLines($phoneLines)
    {
        $this->phoneLines = $phoneLines;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddingPhoneOnRequest()
    {
        return $this->addingPhoneOnRequest;
    }

    /**
     * @param mixed $addingPhoneOnRequest
     * @return $this
     */
    public function setAddingPhoneOnRequest($addingPhoneOnRequest)
    {
        $this->addingPhoneOnRequest = $addingPhoneOnRequest;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelfSelectionTelecom()
    {
        return $this->selfSelectionTelecom;
    }

    /**
     * @param mixed $selfSelectionTelecom
     * @return $this
     */
    public function setSelfSelectionTelecom($selfSelectionTelecom)
    {
        $this->selfSelectionTelecom = $selfSelectionTelecom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAirConditioner()
    {
        return $this->airConditioner;
    }

    /**
     * @param mixed $airConditioner
     * @return $this
     */
    public function setAirConditioner($airConditioner)
    {
        $this->airConditioner = $airConditioner;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * @param mixed $ventilation
     * @return $this
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFireAlarm()
    {
        return $this->fireAlarm;
    }

    /**
     * @param mixed $fireAlarm
     * @return $this
     */
    public function setFireAlarm($fireAlarm)
    {
        $this->fireAlarm = $fireAlarm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWindowType()
    {
        return $this->windowType;
    }

    /**
     * @param mixed $windowType
     * @return $this
     */
    public function setWindowType($windowType)
    {
        $this->windowType = $windowType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOfficeClass()
    {
        return $this->officeClass;
    }

    /**
     * @param mixed $officeClass
     * @return $this
     */
    public function setOfficeClass($officeClass)
    {
        $this->officeClass = $officeClass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessControlSystem()
    {
        return $this->accessControlSystem;
    }

    /**
     * @param mixed $accessControlSystem
     * @return $this
     */
    public function setAccessControlSystem($accessControlSystem)
    {
        $this->accessControlSystem = $accessControlSystem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTwentyFourSeven()
    {
        return $this->twentyFourSeven;
    }

    /**
     * @param mixed $twentyFourSeven
     * @return $this
     */
    public function setTwentyFourSeven($twentyFourSeven)
    {
        $this->twentyFourSeven = $twentyFourSeven;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParkingPlaces()
    {
        return $this->parkingPlaces;
    }

    /**
     * @param mixed $parkingPlaces
     * @return $this
     */
    public function setParkingPlaces($parkingPlaces)
    {
        $this->parkingPlaces = $parkingPlaces;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParkingPlacePrice()
    {
        return $this->parkingPlacePrice;
    }

    /**
     * @param mixed $parkingPlacePrice
     * @return $this
     */
    public function setParkingPlacePrice($parkingPlacePrice)
    {
        $this->parkingPlacePrice = $parkingPlacePrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParkingGuest()
    {
        return $this->parkingGuest;
    }

    /**
     * @param mixed $parkingGuest
     * @return $this
     */
    public function setParkingGuest($parkingGuest)
    {
        $this->parkingGuest = $parkingGuest;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParkingGuestPlaces()
    {
        return $this->parkingGuestPlaces;
    }

    /**
     * @param mixed $parkingGuestPlaces
     * @return $this
     */
    public function setParkingGuestPlaces($parkingGuestPlaces)
    {
        $this->parkingGuestPlaces = $parkingGuestPlaces;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @param mixed $security
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEatingFacilities()
    {
        return $this->eatingFacilities;
    }

    /**
     * @param mixed $eatingFacilities
     * @return $this
     */
    public function setEatingFacilities($eatingFacilities)
    {
        $this->eatingFacilities = $eatingFacilities;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponsibleStorage()
    {
        return $this->responsibleStorage;
    }

    /**
     * @param mixed $responsibleStorage
     * @return $this
     */
    public function setResponsibleStorage($responsibleStorage)
    {
        $this->responsibleStorage = $responsibleStorage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPalletPrice()
    {
        return $this->palletPrice;
    }

    /**
     * @param mixed $palletPrice
     * @return $this
     */
    public function setPalletPrice($palletPrice)
    {
        $this->palletPrice = $palletPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreightElevator()
    {
        return $this->freightElevator;
    }

    /**
     * @param mixed $freightElevator
     * @return $this
     */
    public function setFreightElevator($freightElevator)
    {
        $this->freightElevator = $freightElevator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTruckEntrance()
    {
        return $this->truckEntrance;
    }

    /**
     * @param mixed $truckEntrance
     * @return $this
     */
    public function setTruckEntrance($truckEntrance)
    {
        $this->truckEntrance = $truckEntrance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRamp()
    {
        return $this->ramp;
    }

    /**
     * @param mixed $ramp
     * @return $this
     */
    public function setRamp($ramp)
    {
        $this->ramp = $ramp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * @param mixed $railway
     * @return $this
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOfficeWarehouse()
    {
        return $this->officeWarehouse;
    }

    /**
     * @param mixed $officeWarehouse
     * @return $this
     */
    public function setOfficeWarehouse($officeWarehouse)
    {
        $this->officeWarehouse = $officeWarehouse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpenArea()
    {
        return $this->openArea;
    }

    /**
     * @param mixed $openArea
     * @return $this
     */
    public function setOpenArea($openArea)
    {
        $this->openArea = $openArea;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceThreePl()
    {
        return $this->serviceThreePl;
    }

    /**
     * @param mixed $serviceThreePl
     * @return $this
     */
    public function setServiceThreePl($serviceThreePl)
    {
        $this->serviceThreePl = $serviceThreePl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemperatureComment()
    {
        return $this->temperatureComment;
    }

    /**
     * @param mixed $temperatureComment
     * @return $this
     */
    public function setTemperatureComment($temperatureComment)
    {
        $this->temperatureComment = $temperatureComment;
        return $this;
    }

    /**
     * @inheritdoc
     */
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
