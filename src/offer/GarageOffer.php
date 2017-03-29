<?php


namespace bmwx591\yrl\offer;


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
     * @return mixed
     */
    public function getGarageType()
    {
        return $this->garageType;
    }

    /**
     * @param mixed $garageType
     * @return $this
     */
    public function setGarageType($garageType)
    {
        $this->garageType = $garageType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnershipType()
    {
        return $this->ownershipType;
    }

    /**
     * @param mixed $ownershipType
     * @return $this
     */
    public function setOwnershipType($ownershipType)
    {
        $this->ownershipType = $ownershipType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGarageName()
    {
        return $this->garageName;
    }

    /**
     * @param mixed $garageName
     * @return $this
     */
    public function setGarageName($garageName)
    {
        $this->garageName = $garageName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParkingType()
    {
        return $this->parkingType;
    }

    /**
     * @param mixed $parkingType
     * @return $this
     */
    public function setParkingType($parkingType)
    {
        $this->parkingType = $parkingType;
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
    public function getAutomaticGates()
    {
        return $this->automaticGates;
    }

    /**
     * @param mixed $automaticGates
     * @return $this
     */
    public function setAutomaticGates($automaticGates)
    {
        $this->automaticGates = $automaticGates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCctv()
    {
        return $this->cctv;
    }

    /**
     * @param mixed $cctv
     * @return $this
     */
    public function setCctv($cctv)
    {
        $this->cctv = $cctv;
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
    public function getInspectionPit()
    {
        return $this->inspectionPit;
    }

    /**
     * @param mixed $inspectionPit
     * @return $this
     */
    public function setInspectionPit($inspectionPit)
    {
        $this->inspectionPit = $inspectionPit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCellar()
    {
        return $this->cellar;
    }

    /**
     * @param mixed $cellar
     * @return $this
     */
    public function setCellar($cellar)
    {
        $this->cellar = $cellar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarWash()
    {
        return $this->carWash;
    }

    /**
     * @param mixed $carWash
     * @return $this
     */
    public function setCarWash($carWash)
    {
        $this->carWash = $carWash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoRepair()
    {
        return $this->autoRepair;
    }

    /**
     * @param mixed $autoRepair
     * @return $this
     */
    public function setAutoRepair($autoRepair)
    {
        $this->autoRepair = $autoRepair;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewParking()
    {
        return $this->newParking;
    }

    /**
     * @param mixed $newParking
     * @return $this
     */
    public function setNewParking($newParking)
    {
        $this->newParking = $newParking;
        return $this;
    }
}
