<?php

namespace bmwx591\yrl\offer;

/**
 * Class GarageOffer
 * @package bmwx591\yrl\offer
 */
class GarageOffer extends BaseOffer
{
    protected $garageType;

    protected $ownershipType;

    protected $garageName;

    protected $parkingType;

    protected $security;

    protected $automaticGates;

    protected $cctv;

    protected $fireAlarm;

    protected $accessControlSystem;

    protected $inspectionPit;

    protected $cellar;

    protected $carWash;

    protected $autoRepair;

    protected $newParking;

    /**
     * @return string
     */
    public function getGarageType()
    {
        return $this->garageType;
    }

    /**
     * @param string $garageType
     * @return $this
     */
    public function setGarageType($garageType)
    {
        $this->garageType = $garageType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnershipType()
    {
        return $this->ownershipType;
    }

    /**
     * @param string $ownershipType
     * @return $this
     */
    public function setOwnershipType($ownershipType)
    {
        $this->ownershipType = $ownershipType;
        return $this;
    }

    /**
     * @return string
     */
    public function getGarageName()
    {
        return $this->garageName;
    }

    /**
     * @param string $garageName
     * @return $this
     */
    public function setGarageName($garageName)
    {
        $this->garageName = $garageName;
        return $this;
    }

    /**
     * @return string
     */
    public function getParkingType()
    {
        return $this->parkingType;
    }

    /**
     * @param string $parkingType
     * @return $this
     */
    public function setParkingType($parkingType)
    {
        $this->parkingType = $parkingType;
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
    public function getAutomaticGates()
    {
        return $this->automaticGates;
    }

    /**
     * @param string $automaticGates
     * @return $this
     */
    public function setAutomaticGates($automaticGates)
    {
        $this->automaticGates = $automaticGates;
        return $this;
    }

    /**
     * @return string
     */
    public function getCctv()
    {
        return $this->cctv;
    }

    /**
     * @param string $cctv
     * @return $this
     */
    public function setCctv($cctv)
    {
        $this->cctv = $cctv;
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
    public function getInspectionPit()
    {
        return $this->inspectionPit;
    }

    /**
     * @param string $inspectionPit
     * @return $this
     */
    public function setInspectionPit($inspectionPit)
    {
        $this->inspectionPit = $inspectionPit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellar()
    {
        return $this->cellar;
    }

    /**
     * @param string $cellar
     * @return $this
     */
    public function setCellar($cellar)
    {
        $this->cellar = $cellar;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarWash()
    {
        return $this->carWash;
    }

    /**
     * @param string $carWash
     * @return $this
     */
    public function setCarWash($carWash)
    {
        $this->carWash = $carWash;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoRepair()
    {
        return $this->autoRepair;
    }

    /**
     * @param string $autoRepair
     * @return $this
     */
    public function setAutoRepair($autoRepair)
    {
        $this->autoRepair = $autoRepair;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewParking()
    {
        return $this->newParking;
    }

    /**
     * @param string $newParking
     * @return $this
     */
    public function setNewParking($newParking)
    {
        $this->newParking = $newParking;
        return $this;
    }
}
