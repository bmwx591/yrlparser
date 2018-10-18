<?php

namespace bmwx591\yrl\offer;

/**
 * Class CommercialOffer
 * @package bmwx591\yrl\offer
 */
class CommercialOffer extends Offer
{
    protected $commercialType;

    protected $commercialBuildingType;

    protected $purpose;

    protected $purposeWarehouse;

    protected $lotNumber;

    protected $manuallyAdded;

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
     * @return string
     */
    public function getCommercialBuildingType()
    {
        return $this->commercialBuildingType;
    }

    /**
     * @param string $commercialBuildingType
     * @return $this
     */
    public function setCommercialBuildingType($commercialBuildingType)
    {
        $this->commercialBuildingType = $commercialBuildingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurposeWarehouse()
    {
        return $this->purposeWarehouse;
    }

    /**
     * @param string $purposeWarehouse
     * @return $this
     */
    public function setPurposeWarehouse($purposeWarehouse)
    {
        $this->purposeWarehouse = $purposeWarehouse;
        return $this;
    }

    /**
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * @param string $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCadastralNumber()
    {
        return $this->cadastralNumber;
    }

    /**
     * @param string $cadastralNumber
     * @return $this
     */
    public function setCadastralNumber($cadastralNumber)
    {
        $this->cadastralNumber = $cadastralNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntranceType()
    {
        return $this->entranceType;
    }

    /**
     * @param string $entranceType
     * @return $this
     */
    public function setEntranceType($entranceType)
    {
        $this->entranceType = $entranceType;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPhoneLines()
    {
        return $this->phoneLines;
    }

    /**
     * @param integer $phoneLines
     * @return $this
     */
    public function setPhoneLines($phoneLines)
    {
        $this->phoneLines = $phoneLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddingPhoneOnRequest()
    {
        return $this->addingPhoneOnRequest;
    }

    /**
     * @param string $addingPhoneOnRequest
     * @return $this
     */
    public function setAddingPhoneOnRequest($addingPhoneOnRequest)
    {
        $this->addingPhoneOnRequest = $addingPhoneOnRequest;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelfSelectionTelecom()
    {
        return $this->selfSelectionTelecom;
    }

    /**
     * @param string $selfSelectionTelecom
     * @return $this
     */
    public function setSelfSelectionTelecom($selfSelectionTelecom)
    {
        $this->selfSelectionTelecom = $selfSelectionTelecom;
        return $this;
    }

    /**
     * @return string
     */
    public function getAirConditioner()
    {
        return $this->airConditioner;
    }

    /**
     * @param string $airConditioner
     * @return $this
     */
    public function setAirConditioner($airConditioner)
    {
        $this->airConditioner = $airConditioner;
        return $this;
    }

    /**
     * @return string
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * @param string $ventilation
     * @return $this
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;
        return $this;
    }

    /**
     * @return string
     */
    public function getFireAlarm()
    {
        return $this->fireAlarm;
    }

    /**
     * @param string $fireAlarm
     * @return $this
     */
    public function setFireAlarm($fireAlarm)
    {
        $this->fireAlarm = $fireAlarm;
        return $this;
    }

    /**
     * @return string
     */
    public function getWindowType()
    {
        return $this->windowType;
    }

    /**
     * @param string $windowType
     * @return $this
     */
    public function setWindowType($windowType)
    {
        $this->windowType = $windowType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficeClass()
    {
        return $this->officeClass;
    }

    /**
     * @param string $officeClass
     * @return $this
     */
    public function setOfficeClass($officeClass)
    {
        $this->officeClass = $officeClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessControlSystem()
    {
        return $this->accessControlSystem;
    }

    /**
     * @param string $accessControlSystem
     * @return $this
     */
    public function setAccessControlSystem($accessControlSystem)
    {
        $this->accessControlSystem = $accessControlSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwentyFourSeven()
    {
        return $this->twentyFourSeven;
    }

    /**
     * @param string $twentyFourSeven
     * @return $this
     */
    public function setTwentyFourSeven($twentyFourSeven)
    {
        $this->twentyFourSeven = $twentyFourSeven;
        return $this;
    }

    /**
     * @return integer
     */
    public function getParkingPlaces()
    {
        return $this->parkingPlaces;
    }

    /**
     * @param integer $parkingPlaces
     * @return $this
     */
    public function setParkingPlaces($parkingPlaces)
    {
        $this->parkingPlaces = $parkingPlaces;
        return $this;
    }

    /**
     * @return float
     */
    public function getParkingPlacePrice()
    {
        return $this->parkingPlacePrice;
    }

    /**
     * @param float $parkingPlacePrice
     * @return $this
     */
    public function setParkingPlacePrice($parkingPlacePrice)
    {
        $this->parkingPlacePrice = $parkingPlacePrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getParkingGuest()
    {
        return $this->parkingGuest;
    }

    /**
     * @param string $parkingGuest
     * @return $this
     */
    public function setParkingGuest($parkingGuest)
    {
        $this->parkingGuest = $parkingGuest;
        return $this;
    }

    /**
     * @return integer
     */
    public function getParkingGuestPlaces()
    {
        return $this->parkingGuestPlaces;
    }

    /**
     * @param integer $parkingGuestPlaces
     * @return $this
     */
    public function setParkingGuestPlaces($parkingGuestPlaces)
    {
        $this->parkingGuestPlaces = $parkingGuestPlaces;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @param string $security
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @return string
     */
    public function getEatingFacilities()
    {
        return $this->eatingFacilities;
    }

    /**
     * @param string $eatingFacilities
     * @return $this
     */
    public function setEatingFacilities($eatingFacilities)
    {
        $this->eatingFacilities = $eatingFacilities;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponsibleStorage()
    {
        return $this->responsibleStorage;
    }

    /**
     * @param string $responsibleStorage
     * @return $this
     */
    public function setResponsibleStorage($responsibleStorage)
    {
        $this->responsibleStorage = $responsibleStorage;
        return $this;
    }

    /**
     * @return float
     */
    public function getPalletPrice()
    {
        return $this->palletPrice;
    }

    /**
     * @param float $palletPrice
     * @return $this
     */
    public function setPalletPrice($palletPrice)
    {
        $this->palletPrice = $palletPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getFreightElevator()
    {
        return $this->freightElevator;
    }

    /**
     * @param string $freightElevator
     * @return $this
     */
    public function setFreightElevator($freightElevator)
    {
        $this->freightElevator = $freightElevator;
        return $this;
    }

    /**
     * @return string
     */
    public function getTruckEntrance()
    {
        return $this->truckEntrance;
    }

    /**
     * @param string $truckEntrance
     * @return $this
     */
    public function setTruckEntrance($truckEntrance)
    {
        $this->truckEntrance = $truckEntrance;
        return $this;
    }

    /**
     * @return string
     */
    public function getRamp()
    {
        return $this->ramp;
    }

    /**
     * @param string $ramp
     * @return $this
     */
    public function setRamp($ramp)
    {
        $this->ramp = $ramp;
        return $this;
    }

    /**
     * @return string
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * @param string $railway
     * @return $this
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficeWarehouse()
    {
        return $this->officeWarehouse;
    }

    /**
     * @param string $officeWarehouse
     * @return $this
     */
    public function setOfficeWarehouse($officeWarehouse)
    {
        $this->officeWarehouse = $officeWarehouse;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenArea()
    {
        return $this->openArea;
    }

    /**
     * @param string $openArea
     * @return $this
     */
    public function setOpenArea($openArea)
    {
        $this->openArea = $openArea;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceThreePl()
    {
        return $this->serviceThreePl;
    }

    /**
     * @param string $serviceThreePl
     * @return $this
     */
    public function setServiceThreePl($serviceThreePl)
    {
        $this->serviceThreePl = $serviceThreePl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemperatureComment()
    {
        return $this->temperatureComment;
    }

    /**
     * @param string $temperatureComment
     * @return $this
     */
    public function setTemperatureComment($temperatureComment)
    {
        $this->temperatureComment = $temperatureComment;
        return $this;
    }

    public function isValid()
    {
        if (is_null($this->commercialType)) {
            $this->addError('Required offer field "commercial-type" is empty');
        }
        return parent::isValid();
    }
}
